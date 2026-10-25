<script setup>
import { onMounted } from 'vue';
import { useAppStore } from '../stores/appStore';
import { 
  Zap, 
  Shield, 
  Radio, 
  Activity, 
  Database, 
  Users, 
  History, 
  RotateCw,
  Layers,
  ArrowRight,
  Server,
  Code
} from 'lucide-vue-next';

const store = useAppStore();

const getUrl = (path) => {
  if (typeof window !== 'undefined' && window.location.pathname.includes('/hybridlaravel/public')) {
    return `/hybridlaravel/public${path}`;
  }
  return path;
};

onMounted(async () => {
  await store.fetchStats();
});
</script>

<template>
  <div class="space-y-8">
    <!-- Hero Header -->
    <div class="relative bg-gradient-to-r from-emerald-950/40 via-teal-950/30 to-slate-900/60 border border-emerald-700/40 rounded-3xl p-6 sm:p-8 backdrop-blur-sm shadow-xl">
      <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
        <div>
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-mono font-medium bg-emerald-950 text-emerald-300 border border-emerald-700/50 mb-3">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span>Mode Traditional SPA (Vue 3 Client-Side + Pinia + REST API)</span>
          </div>
          <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
            Dashboard SPA Mandiri
          </h1>
          <p class="mt-2 text-slate-300 text-sm max-w-2xl leading-relaxed">
            Halaman ini berjalan independen sebagai <strong class="text-emerald-300">Single Page Application</strong> dengan routing client-side (<code class="text-xs bg-slate-800 px-1.5 py-0.5 rounded text-emerald-300">Vue Router</code>) dan manajemen state (<code class="text-xs bg-slate-800 px-1.5 py-0.5 rounded text-emerald-300">Pinia</code>) yang berkomunikasi asinkron via Laravel REST API terproteksi Sanctum.
          </p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
          <button
            type="button"
            @click="store.fetchStats"
            :disabled="store.loading"
            class="px-4 py-2.5 rounded-xl font-medium text-xs text-emerald-300 bg-emerald-950/60 hover:bg-emerald-900/80 border border-emerald-700/60 transition-all flex items-center gap-2 cursor-pointer shadow-sm disabled:opacity-60"
          >
            <RotateCw class="w-3.5 h-3.5" :class="{ 'animate-spin': store.loading }" />
            <span>{{ store.loading ? 'Mengambil Data...' : 'Segarkan Data API' }}</span>
          </button>

          <a
            :href="getUrl('/inertia/dashboard')"
            class="px-5 py-2.5 rounded-xl font-semibold text-white bg-indigo-600 hover:bg-indigo-500 transition-all text-xs shadow-lg shadow-indigo-600/30 flex items-center gap-1.5 group"
          >
            <span>Beralih ke Inertia Bridge</span>
            <ArrowRight class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" />
          </a>
        </div>
      </div>
    </div>

    <!-- Live Telemetry & API Latency Metric Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <!-- Latency -->
      <div class="bg-white dark:bg-slate-900/70 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs">
        <div class="flex items-center justify-between">
          <div class="text-xs font-mono text-slate-500 uppercase tracking-wider">REST API Latency</div>
          <Zap class="w-4 h-4 text-emerald-500" />
        </div>
        <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white mt-2 flex items-baseline gap-2">
          <span>{{ store.apiLatencyMs !== null ? `${store.apiLatencyMs}ms` : '...' }}</span>
          <span class="text-[10px] font-mono text-emerald-600 dark:text-emerald-400">HTTP GET</span>
        </div>
        <p class="text-[11px] text-slate-500 mt-1">Roundtrip waktu respons endpoint /api/v1/stats</p>
      </div>

      <!-- Total Users -->
      <div class="bg-white dark:bg-slate-900/70 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs">
        <div class="flex items-center justify-between">
          <div class="text-xs font-mono text-slate-500 uppercase tracking-wider">Total Pengguna</div>
          <Users class="w-4 h-4 text-indigo-500" />
        </div>
        <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white mt-2">
          {{ store.metrics.total_users ?? 0 }}
        </div>
        <p class="text-[11px] text-slate-500 mt-1">Akun terdaftar dalam sistem</p>
      </div>

      <!-- Audit Events -->
      <div class="bg-white dark:bg-slate-900/70 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs">
        <div class="flex items-center justify-between">
          <div class="text-xs font-mono text-slate-500 uppercase tracking-wider">Aktivitas Audit</div>
          <History class="w-4 h-4 text-purple-500" />
        </div>
        <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white mt-2">
          {{ store.metrics.total_activities ?? 0 }}
        </div>
        <p class="text-[11px] text-slate-500 mt-1">Tercatat di Spatie Activitylog</p>
      </div>

      <!-- Database -->
      <div class="bg-white dark:bg-slate-900/70 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 shadow-xs">
        <div class="flex items-center justify-between">
          <div class="text-xs font-mono text-slate-500 uppercase tracking-wider">Basis Data</div>
          <Database class="w-4 h-4 text-teal-500" />
        </div>
        <div class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white mt-2 flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
          <span>MySQL</span>
        </div>
        <p class="text-[11px] text-slate-500 mt-1">Status: Terkoneksi &amp; Aktif</p>
      </div>
    </div>

    <!-- Ready-to-Build Canvas / Placeholder Container -->
    <div class="bg-white dark:bg-slate-900/80 border border-dashed border-slate-300 dark:border-slate-800 rounded-3xl p-8 sm:p-12 text-center">
      <div class="max-w-xl mx-auto space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-emerald-100 dark:bg-emerald-950/70 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mx-auto shadow-inner">
          <Code class="w-6 h-6" />
        </div>

        <h2 class="text-xl font-bold text-slate-900 dark:text-white">
          Kanvas Pengembangan Modul SPA Anda
        </h2>

        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
          Struktur fondasi SPA telah bersih dari data demo. Anda dapat langsung menambahkan halaman baru di <code class="text-xs bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded text-emerald-600 dark:text-emerald-400 font-mono">resources/js/spa/views/</code> dan mendaftarkannya pada <code class="text-xs bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded text-emerald-600 dark:text-emerald-400 font-mono">router/index.js</code>.
        </p>

        <div class="pt-2 flex flex-wrap justify-center gap-3">
          <a
            :href="getUrl('/docs/api')"
            target="_blank"
            class="px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors flex items-center gap-1.5"
          >
            <span>Buka OpenAPI Documentation ↗</span>
          </a>
          <a
            :href="getUrl('/audit-logs')"
            class="px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors flex items-center gap-1.5"
          >
            <span>Lihat Audit Trail</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>
