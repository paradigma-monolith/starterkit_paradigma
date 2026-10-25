<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Manual Book - Hybrid Architecture Enterprise Starter Kit</title>
    <style>
        @page {
            margin: 40px 45px;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #1e293b;
            font-size: 11px;
            line-height: 1.6;
        }
        
        /* Cover Page Styling */
        .cover-page {
            text-align: center;
            padding-top: 120px;
            page-break-after: always;
        }
        .cover-badge {
            display: inline-block;
            background-color: #e0e7ff;
            color: #4338ca;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }
        .cover-title {
            font-size: 26px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.3;
            margin-bottom: 12px;
        }
        .cover-subtitle {
            font-size: 13px;
            color: #64748b;
            max-width: 480px;
            margin: 0 auto 40px auto;
            line-height: 1.5;
        }
        .cover-divider {
            width: 80px;
            height: 4px;
            background: #4f46e5;
            margin: 0 auto 40px auto;
            border-radius: 2px;
        }
        .cover-meta {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 16px 24px;
            display: inline-block;
            text-align: left;
            margin-top: 20px;
        }
        .cover-meta-item {
            margin-bottom: 6px;
            font-size: 11px;
        }
        .cover-meta-label {
            font-weight: bold;
            color: #475569;
            width: 140px;
            display: inline-block;
        }
        .cover-meta-value {
            color: #0f172a;
        }

        /* Section & Content Styling */
        .page-break {
            page-break-before: always;
        }
        .section-header {
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 8px;
            margin-top: 25px;
            margin-bottom: 16px;
        }
        .section-title {
            font-size: 16px;
            font-weight: 800;
            color: #1e1b4b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .section-subtitle {
            font-size: 10px;
            color: #64748b;
            margin-top: 2px;
        }
        h3 {
            font-size: 13px;
            color: #0f172a;
            margin-top: 18px;
            margin-bottom: 8px;
            border-left: 3px solid #6366f1;
            padding-left: 8px;
        }
        h4 {
            font-size: 11px;
            color: #334155;
            margin-top: 12px;
            margin-bottom: 6px;
        }
        p {
            margin-bottom: 10px;
            text-align: justify;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 12px 0 16px 0;
            font-size: 10px;
        }
        th, td {
            padding: 7px 10px;
            border: 1px solid #e2e8f0;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: 0.5px;
        }
        tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        /* Code Blocks */
        pre, code {
            font-family: 'Courier New', Courier, monospace;
        }
        pre {
            background-color: #0f172a;
            color: #f8fafc;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 9.5px;
            line-height: 1.45;
            overflow-x: auto;
            margin: 10px 0 14px 0;
            page-break-inside: avoid;
        }
        code.inline {
            background-color: #f1f5f9;
            color: #4f46e5;
            padding: 1px 4px;
            border-radius: 3px;
            font-size: 10px;
            border: 1px solid #e2e8f0;
        }

        /* Callouts / Alerts */
        .callout {
            padding: 10px 14px;
            border-radius: 6px;
            margin: 12px 0;
            font-size: 10.5px;
            page-break-inside: avoid;
        }
        .callout-info {
            background-color: #eff6ff;
            border-left: 4px solid #3b82f6;
            color: #1e40af;
        }
        .callout-success {
            background-color: #f0fdf4;
            border-left: 4px solid #10b981;
            color: #065f46;
        }
        .callout-warning {
            background-color: #fffbeb;
            border-left: 4px solid #f59e0b;
            color: #92400e;
        }
        .callout-title {
            font-weight: bold;
            margin-bottom: 3px;
        }

        /* Lists */
        ul, ol {
            margin: 6px 0 12px 18px;
            padding: 0;
        }
        li {
            margin-bottom: 4px;
        }

        /* Footer & Header on Printed Pages */
        .doc-footer {
            position: fixed;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 20px;
            border-top: 1px solid #e2e8f0;
            text-align: right;
            font-size: 9px;
            color: #94a3b8;
            padding-top: 5px;
        }
    </style>
</head>
<body>

    <div class="doc-footer">
        Hybrid Architecture Enterprise Starter Kit - Panduan Resmi Pengembang (Halaman Terlampir)
    </div>

    <!-- COVER PAGE -->
    <div class="cover-page">
        <div class="cover-badge">Enterprise Starter Kit v2.0</div>
        <div class="cover-title">MANUAL BOOK &amp; PANDUAN TEKNIS<br>PENGEMBANGAN SISTEM</div>
        <div class="cover-divider"></div>
        <div class="cover-subtitle">
            Fondasi Arsitektur Ganda (Hybrid Monolith) Berbasis Laravel 12 &amp; Vue 3 dengan Inertia.js Bridge dan Traditional SPA via REST API
        </div>

        <div class="cover-meta">
            <div class="cover-meta-item">
                <span class="cover-meta-label">Backend Framework:</span>
                <span class="cover-meta-value">Laravel 12.x / PHP 8.2+</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">Frontend Framework:</span>
                <span class="cover-meta-value">Vue 3 (Composition API) + Pinia</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">Bundler &amp; Styling:</span>
                <span class="cover-meta-value">Vite 7 + Tailwind CSS v4 + Reka UI</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">Basis Data:</span>
                <span class="cover-meta-value">MySQL 8.0 (`hybrid_laravel`)</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">Real-Time Engine:</span>
                <span class="cover-meta-value">Laravel Reverb WebSockets</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">High-Performance:</span>
                <span class="cover-meta-value">Laravel Octane + RoadRunner + Redis</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">Penerbit:</span>
                <span class="cover-meta-value">Paradigma Monolith Ecosystem</span>
            </div>
            <div class="cover-meta-item">
                <span class="cover-meta-label">Tanggal Rilis Dokumen:</span>
                <span class="cover-meta-value">{{ date('d F Y') }}</span>
            </div>
        </div>
    </div>

    <!-- DAFTAR ISI -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">DAFTAR ISI</div>
        <div class="section-subtitle">Struktur Navigasi Buku Panduan</div>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 15%;">Bab</th>
                <th style="width: 65%;">Topik Pembahasan</th>
                <th style="width: 20%; text-align: right;">Cakupan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>BAB 1</strong></td>
                <td><strong>Gambaran Umum &amp; Arsitektur Sistem</strong><br>Konsep arsitektur Hybrid Monolith, keunggulan, dan struktur direktori bersih.</td>
                <td style="text-align: right;">Arsitektur</td>
            </tr>
            <tr>
                <td><strong>BAB 2</strong></td>
                <td><strong>Persyaratan Sistem &amp; Instalasi</strong><br>Prasyarat sistem operasi, dependensi, konfigurasi file `.env`, dan database.</td>
                <td style="text-align: right;">Instalasi</td>
            </tr>
            <tr>
                <td><strong>BAB 3</strong></td>
                <td><strong>Menjalankan Aplikasi (Development &amp; Production)</strong><br>Menjalankan Laravel Serve, Vite HMR, Reverb WebSockets, dan Octane.</td>
                <td style="text-align: right;">Operasional</td>
            </tr>
            <tr>
                <td><strong>BAB 4</strong></td>
                <td><strong>Arsitektur Ganda (Inertia.js vs Traditional SPA)</strong><br>Panduan lengkap membuat halaman baru di Inertia dan di Vue Router SPA.</td>
                <td style="text-align: right;">Pengembangan</td>
            </tr>
            <tr>
                <td><strong>BAB 5</strong></td>
                <td><strong>Autentikasi, Otorisasi RBAC, &amp; Impersonasi</strong><br>Sanctum SSO, Spatie Permission, Activitylog, dan User Impersonation.</td>
                <td style="text-align: right;">Keamanan</td>
            </tr>
            <tr>
                <td><strong>BAB 6</strong></td>
                <td><strong>Komponen UI &amp; Interaksi Modern Reusable</strong><br>BaseChart (ECharts), BaseMap (MapLibre), BaseDataTable, CommandPalette, useDate.</td>
                <td style="text-align: right;">Komponen UI</td>
            </tr>
            <tr>
                <td><strong>BAB 7</strong></td>
                <td><strong>Layanan Data, Pencarian, &amp; Manajemen Berkas</strong><br>Laravel Scout, Spatie MediaLibrary, QueryBuilder, Backup, &amp; Export.</td>
                <td style="text-align: right;">Backend Engine</td>
            </tr>
            <tr>
                <td><strong>BAB 8</strong></td>
                <td><strong>Real-Time WebSockets &amp; Telemetri Sistem</strong><br>Pesan real-time Reverb, event broadcasting, Laravel Pulse, dan Sentry.</td>
                <td style="text-align: right;">Monitoring</td>
            </tr>
            <tr>
                <td><strong>BAB 9</strong></td>
                <td><strong>Pengujian Otomatis &amp; Standarisasi Rilis</strong><br>Menjalankan test suite PHPUnit/Pest dan checklist deployment produksi.</td>
                <td style="text-align: right;">QA &amp; Deploy</td>
            </tr>
        </tbody>
    </table>

    <!-- BAB 1 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 1: GAMBARAN UMUM &amp; ARSITEKTUR SISTEM</div>
        <div class="section-subtitle">Konsep Dasar Hybrid Monolith Architecture</div>
    </div>

    <h3>1.1 Konsep Hybrid Monolith</h3>
    <p>
        Starter kit ini menggabungkan dua filosofi antarmuka terdepan dalam ekosistem web modern di atas fondasi backend tunggal Laravel 12:
    </p>
    <ul>
        <li><strong>Inertia.js Monolith Bridge:</strong> Pendekatan server-driven di mana routing dan data disediakan langsung oleh Laravel Controller via <code class="inline">Inertia::render()</code>. Developer menikmati kenyamanan reactive UI Vue 3 tanpa perlu menulis API serializer manual.</li>
        <li><strong>Traditional Decoupled SPA:</strong> Berjalan di bawah rute <code class="inline">/spa/*</code> menggunakan Vue Router (History Mode) dan Pinia Store yang berkomunikasi asinkron via Axios ke endpoint REST API <code class="inline">/api/v1/*</code>.</li>
    </ul>

    <div class="callout callout-info">
        <div class="callout-title">Autentikasi Tunggal (Single Sign-On Stateful Session)</div>
        Pengguna hanya perlu login satu kali di <code class="inline">/login</code>. Sesi cookie HTTP-Only diamankan secara otomatis oleh Laravel Sanctum dan berlaku serentak baik saat pengguna membuka halaman Inertia maupun halaman SPA.
    </div>

    <h3>1.2 Struktur Direktori Proyek</h3>
    <pre>app/
├── Exports/                     # Ekspor Excel, CSV, dan PDF (AuditLogsExport.php)
├── Http/
│   ├── Controllers/
│   │   ├── Api/                 # Endpoint REST API (GlobalSearch, Media, Users, Stats)
│   │   ├── Auth/                # Login, Logout, Lupa Password
│   │   └── Inertia/             # Controller Halaman Inertia (DashboardController)
│   └── Middleware/              # HandleInertiaRequests (Shared state &amp; Impersonate)
├── Models/                      # Model Eloquent (User dengan HasMedia, LogsActivity, Scout)
config/                          # Konfigurasi Backup, MediaLibrary, Scout, Octane, Pulse
database/migrations/             # Skema tabel database (Users, Media, Audit Trail, Chat)
resources/
├── css/                         # Tailwind CSS v4 &amp; Sonner Toast styles
├── js/
│   ├── Components/              # Komponen Reusable (BaseDataTable, BaseChart, BaseMap, dsb)
│   ├── Pages/                   # Halaman Inertia.js (Auth, Inertia/Dashboard)
│   ├── composables/             # Composable fungsi (useDate.js)
│   └── spa/                     # Single Page Application (views, stores, router)
routes/                          # web.php, api.php, channels.php, console.php
tests/Feature/                   # Pengujian Otomatis Fitur &amp; Unit</pre>

    <!-- BAB 2 & 3 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 2 &amp; 3: INSTALASI &amp; MENJALANKAN APLIKASI</div>
        <div class="section-subtitle">Langkah Konfigurasi Lingkungan Pengembangan</div>
    </div>

    <h3>2.1 Prasyarat Sistem</h3>
    <table>
        <thead>
            <tr>
                <th>Komponen</th>
                <th>Versi Minimum</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PHP</td>
                <td>8.2.0 atau lebih tinggi</td>
                <td>Wajib modul: `curl`, `fileinfo`, `mbstring`, `openssl`, `pdo_mysql`, `zip`</td>
            </tr>
            <tr>
                <td>Node.js &amp; NPM</td>
                <td>Node v20.x / v24.x LTS (NPM 10+)</td>
                <td>Untuk bundler Vite 7 dan dependensi UI</td>
            </tr>
            <tr>
                <td>Basis Data</td>
                <td>MySQL 8.0 / MariaDB 10.4+</td>
                <td>Database bawaan: `hybrid_laravel`</td>
            </tr>
            <tr>
                <td>Composer</td>
                <td>Versi 2.5+</td>
                <td>Package manager PHP</td>
            </tr>
        </tbody>
    </table>

    <h3>2.2 Langkah Instalasi Pertama Kali</h3>
    <pre># 1. Salin konfigurasi environment
cp .env.example .env

# 2. Pasang dependensi PHP dan Node.js
composer install --prefer-dist
npm install

# 3. Buat application key dan storage symlink
php artisan key:generate
php artisan storage:link

# 4. Jalankan migrasi dan seeder awal
php artisan migrate:fresh --seed</pre>

    <h3>3.1 Menjalankan Server Aplikasi</h3>
    <p>Untuk menjalankan seluruh layanan secara optimal, buka terminal dan jalankan:</p>
    <pre># Terminal 1: Backend Server Laravel (Port 8000)
php artisan serve --host=127.0.0.1 --port=8000

# Terminal 2: Vite Development Server (Port 5173 - Hot Module Replacement)
npm run dev

# Terminal 3 (Opsional): WebSocket Server Real-Time Reverb
php artisan reverb:start --port=8080

# Terminal 4 (Alternatif High Performance): Octane RoadRunner
./rr.exe serve</pre>

    <div class="callout callout-success">
        <div class="callout-title">Kredensial Default Akun Bawaan</div>
        Email: <code class="inline">admin@hybrid.local</code> &nbsp;|&nbsp; Password: <code class="inline">password</code> &nbsp;|&nbsp; Role: <strong>Super Admin</strong>
    </div>

    <!-- BAB 4 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 4: PANDUAN PENGEMBANGAN FITUR BARU</div>
        <div class="section-subtitle">Alur Menambahkan Halaman Baru di Inertia dan SPA</div>
    </div>

    <h3>4.1 Menambahkan Halaman di Inertia.js Bridge</h3>
    <ol>
        <li><strong>Buat Controller:</strong> Letakkan di <code class="inline">app/Http/Controllers/</code>:
            <pre>namespace App\Http\Controllers;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class UserController extends Controller {
    public function index(): Response {
        return Inertia::render('Users/Index', [
            'users' => User::latest()->paginate(10),
        ]);
    }
}</pre>
        </li>
        <li><strong>Daftarkan Rute:</strong> Tambahkan di <code class="inline">routes/web.php</code>:
            <pre>Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});</pre>
        </li>
        <li><strong>Buat Tampilan Vue:</strong> Buat berkas <code class="inline">resources/js/Pages/Users/Index.vue</code>:
            <pre>&lt;script setup&gt;
import HybridNavbar from '@/Components/HybridNavbar.vue';
defineProps({ users: Object });
&lt;/script&gt;
&lt;template&gt;
  &lt;HybridNavbar mode="inertia" /&gt;
  &lt;main class="max-w-7xl mx-auto p-6"&gt;
    &lt;h1 class="text-xl font-bold"&gt;Manajemen Pengguna&lt;/h1&gt;
  &lt;/main&gt;
&lt;/template&gt;</pre>
        </li>
    </ol>

    <h3>4.2 Menambahkan Halaman di Traditional SPA</h3>
    <ol>
        <li><strong>Buat View Vue:</strong> Di <code class="inline">resources/js/spa/views/ReportView.vue</code>.</li>
        <li><strong>Daftarkan Rute Vue Router:</strong> Di <code class="inline">resources/js/spa/router/index.js</code>:
            <pre>{
  path: '/reports',
  name: 'spa-reports',
  component: () => import('../views/ReportView.vue'),
}</pre>
        </li>
        <li><strong>Ambil Data via Axios:</strong> Hubungkan ke endpoint API di <code class="inline">/api/v1/*</code>.</li>
    </ol>

    <!-- BAB 5 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 5: KEAMANAN, RBAC, &amp; IMPERSONASI</div>
        <div class="section-subtitle">Otorisasi Hak Akses, Audit Trail, dan Bantuan Pelanggan</div>
    </div>

    <h3>5.1 Manajemen Role &amp; Permission (Spatie Permission)</h3>
    <p>Sistem dilengkapi 3 role bawaan: <code class="inline">Super Admin</code>, <code class="inline">Admin</code>, dan <code class="inline">Staff</code>. Pengecekan otorisasi dapat dilakukan langsung di Controller, Route, maupun Blade:</p>
    <pre>// Pengecekan di Controller
if (!auth()->user()->hasRole('Super Admin')) {
    abort(403, 'Akses khusus Super Admin.');
}

// Pengecekan via Route Middleware
Route::get('/settings', [SettingController::class, 'index'])
    ->middleware('role:Super Admin');</pre>

    <h3>5.2 Audit Trail Otomatis (Spatie Activitylog)</h3>
    <p>Setiap perubahan data penting (Create, Update, Delete) pada model Eloquent terekam otomatis di tabel <code class="inline">activity_log</code>:</p>
    <pre>// Model User otomatis mengaktifkan audit trail:
public function getActivitylogOptions(): LogOptions {
    return LogOptions::defaults()
        ->logOnly(['name', 'email', 'avatar'])
        ->logOnlyDirty()
        ->useLogName('user');
}</pre>

    <h3>5.3 User Impersonation (Login Sebagai Pengguna Lain)</h3>
    <p>Super Admin dapat menyamar sebagai user lain untuk memverifikasi kendala tanpa mengetahui kata sandi mereka:</p>
    <ul>
        <li><strong>Mulai Impersonasi:</strong> Akses rute <code class="inline">/impersonate/take/{userId}</code>.</li>
        <li><strong>Safety Warning Banner:</strong> Banner warna oranye muncul di bagian atas <code class="inline">HybridNavbar.vue</code>.</li>
        <li><strong>Selesai Impersonasi:</strong> Klik tombol *"Kembali ke Super Admin ✕"* atau akses <code class="inline">/impersonate/leave</code>.</li>
    </ul>

    <!-- BAB 6 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 6: KOMPONEN UI &amp; INTERAKSI REUSABLE</div>
        <div class="section-subtitle">Koleksi Komponen Frontend Siap Pakai</div>
    </div>

    <h3>6.1 Tabel Data Enterprise (BaseDataTable.vue)</h3>
    <p>Mendukung pencarian dinamis, sortir multi-kolom, pagination, dan custom slot cell:</p>
    <pre>&lt;script setup&gt;
import BaseDataTable from '@/Components/BaseDataTable.vue';
import { useDate } from '@/composables/useDate';
const { formatDate } = useDate();

const columns = [
  { key: 'name', label: 'Nama Pengguna', sortable: true },
  { key: 'email', label: 'Email', sortable: true },
  { key: 'created_at', label: 'Tanggal Buat', sortable: true },
];
&lt;/script&gt;
&lt;template&gt;
  &lt;BaseDataTable :columns="columns" :data="users"&gt;
    &lt;template #cell(created_at)="{ value }"&gt;
      @{{ formatDate(value) }}
    &lt;/template&gt;
  &lt;/BaseDataTable&gt;
&lt;/template&gt;</pre>

    <h3>6.2 Visualisasi Grafik (BaseChart.vue) &amp; Peta 3D (BaseMap.vue)</h3>
    <pre>// Menampilkan Grafik ECharts yang responsif dark mode
&lt;BaseChart :option="chartOptions" height="320px" /&gt;

// Menampilkan Peta Interaktif MapLibre GL
&lt;BaseMap :markers="[ { id: 1, coordinates: [106.8272, -6.1751], name: 'Kantor Pusat' } ]" height="400px" /&gt;</pre>

    <h3>6.3 Global Command Palette (`Ctrl + K`) &amp; Vue Sonner Toast</h3>
    <ul>
        <li><strong>Command Palette:</strong> Tekan <code class="inline">Ctrl + K</code> di keyboard atau klik tombol Cari. Terhubung langsung dengan Laravel Scout untuk pencarian pengguna dan navigasi menu cepat.</li>
        <li><strong>Vue Sonner Toast:</strong> Panggil notifikasi modern dari komponen apa pun:
            <pre>import { toast } from 'vue-sonner';
toast.success('Data transaksi berhasil disimpan!');
toast.error('Gagal menghubungi server.');</pre>
        </li>
    </ul>

    <!-- BAB 7 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 7: LAYANAN BACKEND, PENCARIAN, &amp; BERKAS</div>
        <div class="section-subtitle">Integrasi Media, Full-Text Search, dan Query Builder</div>
    </div>

    <h3>7.1 Manajemen Berkas &amp; Lampiran (Spatie MediaLibrary)</h3>
    <p>Model <code class="inline">User</code> siap mengelola lampiran dokumen dan gambar dengan konversi otomatis WebP thumbnail:</p>
    <pre>// Mengunggah berkas via Controller
$user->addMediaFromRequest('avatar')
     ->toMediaCollection('avatars');

// Mengambil URL berkas asli dan thumbnail
$url = $user->getFirstMediaUrl('avatars');
$thumbUrl = $user->getFirstMediaUrl('avatars', 'thumb');</pre>

    <h3>7.2 Pencarian Teks Penuh (Laravel Scout)</h3>
    <p>Aktifkan pencarian di model Eloquent cukup dengan trait <code class="inline">Searchable</code>:</p>
    <pre>// Melakukan pencarian full-text
$results = User::search('budi')->paginate(10);</pre>

    <h3>7.3 Server-Side Query Builder (Spatie QueryBuilder)</h3>
    <p>Menstandarisasi filter dan sortir dari query parameter HTTP tanpa kode boilerplate:</p>
    <pre>$users = QueryBuilder::for(User::class)
    ->allowedFilters(['name', 'email'])
    ->allowedSorts(['id', 'name', 'created_at'])
    ->defaultSort('-created_at')
    ->paginate(15);</pre>

    <h3>7.4 Pencadangan Database &amp; Berkas (Spatie Backup)</h3>
    <pre># Jalankan backup database saja
php artisan backup:run --only-db

# Bersihkan backup yang sudah kedaluwarsa
php artisan backup:clean</pre>

    <!-- BAB 8 & 9 -->
    <div class="page-break"></div>
    <div class="section-header">
        <div class="section-title">BAB 8 &amp; 9: MONITORING, PENGUJIAN, &amp; RILIS</div>
        <div class="section-subtitle">Real-Time Telemetri, Quality Assurance, dan Deployment</div>
    </div>

    <h3>8.1 Pemantauan Telemetri &amp; WebSockets</h3>
    <ul>
        <li><strong>Laravel Reverb WebSockets:</strong> Menyediakan koneksi real-time dua arah tanpa dependensi Pusher berbayar. Digunakan pada Floating Chat dan Notifikasi Real-Time dengan audio chime.</li>
        <li><strong>Laravel Pulse (`/pulse`):</strong> Dashboard monitoring internal untuk memantau performa CPU, server memory, slow queries, antrean queue, dan error rate.</li>
        <li><strong>Dedoc Scramble (`/docs/api`):</strong> Dokumentasi OpenAPI 3.0 interaktif yang diperbarui secara otomatis dari tipe data controller &amp; form request.</li>
    </ul>

    <h3>9.1 Pengujian Otomatis (Testing Suite)</h3>
    <p>Seluruh modul dan endpoint dilindungi pengujian regresi:</p>
    <pre># Menjalankan seluruh pengujian (Unit &amp; Feature Test)
php artisan test</pre>
    <div class="callout callout-success">
        <div class="callout-title">Hasil Uji Regresi Terakhir:</div>
        <strong>56 passed (179 assertions)</strong> - 100% Lulus mencakup Autentikasi, Chat, Export, Octane, Redis, Reverb, Sentry, MediaLibrary, Scout, QueryBuilder, Impersonate, dan Backup.
    </div>

    <h3>9.2 Checklist Deployment Produksi</h3>
    <ol>
        <li>Ubah <code class="inline">APP_ENV=production</code> dan <code class="inline">APP_DEBUG=false</code> di berkas <code class="inline">.env</code>.</li>
        <li>Jalankan optimasi cache Laravel:
            <pre>php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache</pre>
        </li>
        <li>Kompilasi aset frontend untuk produksi:
            <pre>npm run build</pre>
        </li>
        <li>Konfigurasi Process Manager (Supervisor / systemd) untuk menjalankan daemon queue worker dan server Reverb WebSocket secara persistent.</li>
    </ol>

    <div style="margin-top: 40px; text-align: center; color: #94a3b8; font-size: 10px; border-top: 1px solid #e2e8f0; padding-top: 15px;">
        &copy; {{ date('Y') }} Paradigma Monolith Starter Kit. Dilindungi di bawah Lisensi MIT.
    </div>

</body>
</html>
