<script setup>
import { ref, computed } from 'vue';
import { 
  ChevronUp, 
  ChevronDown, 
  ChevronsUpDown, 
  Search, 
  ChevronLeft, 
  ChevronRight, 
  Inbox,
  Loader2,
  X
} from 'lucide-vue-next';

const props = defineProps({
  columns: {
    type: Array,
    required: true,
    // Format: [{ key: 'name', label: 'Nama', sortable: true, class: '...', headerClass: '...' }]
  },
  data: {
    type: [Array, Object],
    required: true,
    // Can be either an array of objects or a Laravel pagination object: { data: [...], current_page: 1, last_page: 5, total: 50, per_page: 10 }
  },
  searchable: {
    type: Boolean,
    default: true,
  },
  searchPlaceholder: {
    type: String,
    default: 'Cari data...',
  },
  loading: {
    type: Boolean,
    default: false,
  },
  emptyMessage: {
    type: String,
    default: 'Belum ada data yang dapat ditampilkan.',
  },
  // If true, sorting & searching are handled internally in client memory
  clientSide: {
    type: Boolean,
    default: false,
  },
});

const emit = defineEmits(['sort', 'page-change', 'search']);

const searchQuery = ref('');
const sortKey = ref('');
const sortDirection = ref('asc'); // 'asc' | 'desc'
const clientCurrentPage = ref(1);
const perPage = ref(10);

// Detect if data is a Laravel pagination object or raw array
const isPaginated = computed(() => {
  return props.data && typeof props.data === 'object' && Array.isArray(props.data.data);
});

const rawRows = computed(() => {
  if (isPaginated.value) {
    return props.data.data || [];
  }
  return Array.isArray(props.data) ? props.data : [];
});

// Client-side processing if clientSide prop is true
const processedRows = computed(() => {
  let rows = [...rawRows.value];

  if (!props.clientSide) {
    return rows;
  }

  // Client search
  if (searchQuery.value.trim()) {
    const q = searchQuery.value.toLowerCase();
    rows = rows.filter(row => {
      return props.columns.some(col => {
        const val = row[col.key];
        return val !== null && val !== undefined && String(val).toLowerCase().includes(q);
      });
    });
  }

  // Client sort
  if (sortKey.value) {
    rows.sort((a, b) => {
      const aVal = a[sortKey.value] ?? '';
      const bVal = b[sortKey.value] ?? '';
      if (aVal < bVal) return sortDirection.value === 'asc' ? -1 : 1;
      if (aVal > bVal) return sortDirection.value === 'asc' ? 1 : -1;
      return 0;
    });
  }

  return rows;
});

const handleSort = (column) => {
  if (!column.sortable) return;

  if (sortKey.value === column.key) {
    sortDirection.value = sortDirection.value === 'asc' ? 'desc' : 'asc';
  } else {
    sortKey.value = column.key;
    sortDirection.value = 'asc';
  }

  emit('sort', { key: sortKey.value, direction: sortDirection.value });
};

const handleSearch = () => {
  emit('search', searchQuery.value);
};

const clearSearch = () => {
  searchQuery.value = '';
  emit('search', '');
};

const handlePageChange = (page) => {
  if (props.clientSide) {
    clientCurrentPage.value = page;
  } else {
    emit('page-change', page);
  }
};
</script>

<template>
  <div class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-xs overflow-hidden transition-colors">
    <!-- Table Header Controls: Search & Top Actions Slot -->
    <div v-if="searchable || $slots.actions" class="p-4 border-b border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
      <!-- Search Input -->
      <div v-if="searchable" class="relative max-w-sm w-full">
        <Search class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" />
        <input
          v-model="searchQuery"
          type="text"
          :placeholder="searchPlaceholder"
          @input="handleSearch"
          class="w-full pl-9 pr-8 py-2 rounded-xl text-xs bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700/80 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all"
        />
        <button
          v-if="searchQuery"
          type="button"
          @click="clearSearch"
          class="absolute right-2.5 top-1/2 -translate-y-1/2 p-0.5 rounded text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
        >
          <X class="w-3.5 h-3.5" />
        </button>
      </div>

      <!-- Custom Actions Slot (Buttons, Export, Filters) -->
      <div v-if="$slots.actions" class="flex items-center gap-2">
        <slot name="actions" />
      </div>
    </div>

    <!-- Table Container -->
    <div class="relative overflow-x-auto">
      <!-- Loading Overlay -->
      <div 
        v-if="loading" 
        class="absolute inset-0 bg-white/70 dark:bg-slate-900/70 backdrop-blur-2xs flex items-center justify-center z-10"
      >
        <div class="flex items-center gap-2 text-indigo-600 dark:text-indigo-400 text-xs font-semibold">
          <Loader2 class="w-5 h-5 animate-spin" />
          <span>Memuat data...</span>
        </div>
      </div>

      <table class="w-full text-left text-xs text-slate-700 dark:text-slate-300">
        <!-- Table Head -->
        <thead class="bg-slate-50 dark:bg-slate-800/60 text-[11px] uppercase tracking-wider text-slate-500 dark:text-slate-400 font-semibold border-b border-slate-200 dark:border-slate-800">
          <tr>
            <th
              v-for="col in columns"
              :key="col.key"
              :class="[
                'px-4 py-3 select-none',
                col.sortable ? 'cursor-pointer hover:text-slate-900 dark:hover:text-white' : '',
                col.headerClass || ''
              ]"
              @click="handleSort(col)"
            >
              <div class="flex items-center gap-1.5">
                <span>{{ col.label }}</span>
                <span v-if="col.sortable" class="text-slate-400">
                  <ChevronUp v-if="sortKey === col.key && sortDirection === 'asc'" class="w-3.5 h-3.5 text-indigo-500" />
                  <ChevronDown v-else-if="sortKey === col.key && sortDirection === 'desc'" class="w-3.5 h-3.5 text-indigo-500" />
                  <ChevronsUpDown v-else class="w-3 h-3 opacity-60" />
                </span>
              </div>
            </th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-slate-200/80 dark:divide-slate-800/60">
          <tr v-if="processedRows.length === 0 && !loading" class="text-center">
            <td :colspan="columns.length" class="py-12 text-slate-400">
              <Inbox class="w-8 h-8 text-slate-300 dark:text-slate-600 mx-auto mb-2" />
              <p class="text-xs">{{ emptyMessage }}</p>
            </td>
          </tr>

          <tr
            v-for="(row, rowIndex) in processedRows"
            :key="row.id || rowIndex"
            class="hover:bg-slate-50/80 dark:hover:bg-slate-800/40 transition-colors"
          >
            <td
              v-for="col in columns"
              :key="col.key"
              :class="['px-4 py-3.5 align-middle', col.class || '']"
            >
              <!-- Cell Slot with fallback -->
              <slot :name="`cell(${col.key})`" :row="row" :value="row[col.key]">
                {{ row[col.key] !== null && row[col.key] !== undefined ? row[col.key] : '-' }}
              </slot>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Table Footer / Pagination -->
    <div 
      v-if="isPaginated && data.total > 0"
      class="p-3.5 border-t border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500 dark:text-slate-400"
    >
      <div>
        Menampilkan <span class="font-semibold text-slate-800 dark:text-slate-200">{{ data.from || 1 }}</span> - 
        <span class="font-semibold text-slate-800 dark:text-slate-200">{{ data.to || data.total }}</span> dari 
        <span class="font-semibold text-slate-800 dark:text-slate-200">{{ data.total }}</span> data
      </div>

      <!-- Pagination Buttons -->
      <div class="flex items-center gap-1">
        <button
          type="button"
          :disabled="!data.prev_page_url"
          @click="handlePageChange(data.current_page - 1)"
          class="p-1.5 rounded-lg border border-slate-200 dark:border-slate-700 disabled:opacity-40 disabled:cursor-not-allowed hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors cursor-pointer"
        >
          <ChevronLeft class="w-4 h-4" />
        </button>

        <span class="px-3 py-1 font-mono text-xs font-semibold text-slate-700 dark:text-slate-300">
          Halaman {{ data.current_page }} dari {{ data.last_page }}
        </span>

        <button
          type="button"
          :disabled="!data.next_page_url"
          @click="handlePageChange(data.current_page + 1)"
          class="p-1.5 rounded-lg border border-slate-200 dark:border-slate-700 disabled:opacity-40 disabled:cursor-not-allowed hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors cursor-pointer"
        >
          <ChevronRight class="w-4 h-4" />
        </button>
      </div>
    </div>
  </div>
</template>
