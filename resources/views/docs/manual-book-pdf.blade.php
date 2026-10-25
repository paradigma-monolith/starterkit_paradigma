<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Manual Book - Enterprise Hybrid Starter Kit</title>
    <style>
        @page {
            margin: 32px 42px 36px 42px;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #1e293b;
            font-size: 10px;
            line-height: 1.5;
        }

        /* Running Header */
        .running-header {
            position: fixed;
            top: -24px;
            left: 0;
            right: 0;
            height: 16px;
            border-bottom: 1px solid #cbd5e1;
            font-size: 8px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .running-header-right {
            float: right;
            font-weight: bold;
            color: #4f46e5;
        }

        /* Cover Page - Strict 1 Page Height */
        .cover {
            text-align: center;
            padding-top: 20px;
            page-break-after: always;
        }
        .cover-tagline {
            display: inline-block;
            background-color: #e0e7ff;
            color: #3730a3;
            padding: 4px 14px;
            border-radius: 999px;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 16px;
            border: 1px solid #c7d2fe;
        }
        .cover-title {
            font-size: 24px;
            font-weight: 900;
            color: #0f172a;
            line-height: 1.25;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        .cover-subtitle {
            font-size: 11px;
            color: #475569;
            max-width: 500px;
            margin: 0 auto 18px auto;
            line-height: 1.5;
        }
        .cover-accent {
            width: 70px;
            height: 3px;
            background-color: #4f46e5;
            margin: 0 auto 20px auto;
            border-radius: 2px;
        }
        .cover-cards {
            margin: 12px auto 20px auto;
            width: 92%;
            border-collapse: collapse;
        }
        .cover-card-td {
            width: 33.33%;
            padding: 6px;
            vertical-align: top;
        }
        .cover-card {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 10px 8px;
            text-align: center;
        }
        .cover-card-num {
            font-size: 15px;
            font-weight: 900;
            color: #4f46e5;
        }
        .cover-card-label {
            font-size: 8.5px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            margin-top: 2px;
        }
        .cover-meta-table {
            width: 92%;
            margin: 0 auto;
            border-collapse: collapse;
            font-size: 9.5px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            background-color: #ffffff;
        }
        .cover-meta-table td {
            padding: 5px 10px;
            border-bottom: 1px solid #f1f5f9;
        }
        .cover-meta-label {
            font-weight: 700;
            color: #475569;
            width: 32%;
            background-color: #f8fafc;
        }
        .cover-meta-val {
            color: #0f172a;
            font-weight: 500;
        }

        /* Typography & Natural Flow Headings */
        .section-header {
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 5px;
            margin-top: 18px;
            margin-bottom: 10px;
            page-break-after: avoid;
        }
        .section-title {
            font-size: 13px;
            font-weight: 900;
            color: #1e1b4b;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .section-desc {
            font-size: 9px;
            color: #64748b;
            margin-top: 1px;
        }
        h3 {
            font-size: 11px;
            font-weight: 800;
            color: #0f172a;
            margin-top: 12px;
            margin-bottom: 5px;
            border-left: 3px solid #4f46e5;
            padding-left: 7px;
            page-break-after: avoid;
        }
        h4 {
            font-size: 10px;
            font-weight: 700;
            color: #334155;
            margin-top: 8px;
            margin-bottom: 4px;
            page-break-after: avoid;
        }
        p {
            margin-bottom: 6px;
            text-align: justify;
        }

        /* Hyperlinks */
        a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }

        /* Tables with page-break protection */
        table.data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 8px 0 12px 0;
            font-size: 9px;
            page-break-inside: avoid;
        }
        table.data-table th, table.data-table td {
            padding: 5px 7px;
            border: 1px solid #e2e8f0;
            text-align: left;
            vertical-align: top;
        }
        table.data-table th {
            background-color: #f1f5f9;
            color: #1e293b;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 8px;
            letter-spacing: 0.4px;
        }
        table.data-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        /* Pill Badges */
        .badge {
            display: inline-block;
            padding: 1.5px 5px;
            border-radius: 4px;
            font-size: 7.5px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .badge-get { background-color: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
        .badge-post { background-color: #e0e7ff; color: #3730a3; border: 1px solid #c7d2fe; }
        .badge-patch { background-color: #fef3c7; color: #92400e; border: 1px solid #fde68a; }
        .badge-delete { background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }

        /* Code Blocks */
        pre {
            background-color: #0f172a;
            color: #f8fafc;
            padding: 7px 10px;
            border-radius: 5px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 8.5px;
            line-height: 1.4;
            margin: 6px 0 10px 0;
            page-break-inside: avoid;
            border: 1px solid #1e293b;
        }
        code.inline {
            background-color: #f1f5f9;
            color: #4f46e5;
            padding: 1px 3px;
            border-radius: 3px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 8.5px;
            border: 1px solid #e2e8f0;
        }

        /* Callout Boxes */
        .callout {
            padding: 8px 10px;
            border-radius: 5px;
            margin: 8px 0;
            font-size: 9.5px;
            page-break-inside: avoid;
        }
        .callout-info {
            background-color: #eff6ff;
            border-left: 3px solid #3b82f6;
            color: #1e40af;
        }
        .callout-success {
            background-color: #f0fdf4;
            border-left: 3px solid #10b981;
            color: #065f46;
        }
        .callout-warning {
            background-color: #fffbeb;
            border-left: 3px solid #f59e0b;
            color: #92400e;
        }
        .callout-purple {
            background-color: #faf5ff;
            border-left: 3px solid #a855f7;
            color: #6b21a8;
        }
        .callout-title {
            font-weight: 800;
            margin-bottom: 2px;
            font-size: 9.5px;
        }

        /* Architecture Diagram Boxes */
        .diagram-container {
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 8px;
            margin: 8px 0;
            font-family: 'Courier New', Courier, monospace;
            font-size: 8px;
            line-height: 1.3;
            page-break-inside: avoid;
        }

        /* Lists */
        ul, ol {
            margin: 3px 0 8px 14px;
            padding: 0;
        }
        li {
            margin-bottom: 2px;
        }
    </style>
</head>
<body>

    <!-- DOMPDF DYNAMIC CANVAS FOOTER (True Page Numbers) -->
    <script type="text/php">
    if (isset($pdf)) {
        $text = "Halaman {PAGE_NUM} dari {PAGE_COUNT}";
        $font = $fontMetrics->get_font("Helvetica", "normal");
        $size = 8;
        $color = array(0.4, 0.45, 0.53);
        $pdf->page_text(485, 810, $text, $font, $size, $color);
        $pdf->page_text(42, 810, "Paradigma Monolith Starter Kit - Manual Book Resmi (Laravel 12 + Vue 3)", $font, $size, $color);
    }
    </script>

    <!-- RUNNING HEADER ON ALL PAGES -->
    <div class="running-header">
        <span>Arsitektur Ganda (Inertia.js + Traditional SPA)</span>
        <span class="running-header-right">PANDUAN PENGEMBANGAN SISTEM</span>
    </div>

    <!-- ==================== COVER PAGE (PAGE 1) ==================== -->
    <div class="cover">
        <div class="cover-tagline">Dokumentasi Arsitektur Resmi &bull; Edisi 2026</div>
        <div class="cover-title">
            MANUAL BOOK TEKNIS<br>ENTERPRISE STARTER KIT
        </div>
        <div class="cover-accent"></div>
        <div class="cover-subtitle">
            Buku Panduan Komprehensif Arsitektur Hybrid (Inertia.js Monolith &amp; Traditional SPA) Berbasis <strong>Laravel 12, Vue 3, Octane, Reverb, Tailwind v4, &amp; Spatie Toolchain</strong>.
        </div>

        <table class="cover-cards">
            <tr>
                <td class="cover-card-td">
                    <div class="cover-card">
                        <div class="cover-card-num">2-in-1</div>
                        <div class="cover-card-label">Hybrid Paradigma</div>
                    </div>
                </td>
                <td class="cover-card-td">
                    <div class="cover-card">
                        <div class="cover-card-num">22+</div>
                        <div class="cover-card-label">Enterprise Tools</div>
                    </div>
                </td>
                <td class="cover-card-td">
                    <div class="cover-card">
                        <div class="cover-card-num">100%</div>
                        <div class="cover-card-label">56 Tests Passed</div>
                    </div>
                </td>
            </tr>
        </table>

        <table class="cover-meta-table">
            <tr>
                <td class="cover-meta-label">Nama Repositori:</td>
                <td class="cover-meta-val"><a href="https://github.com/paradigma-monolith/starterkit_paradigma" target="_blank">paradigma-monolith/starterkit_paradigma ↗</a></td>
            </tr>
            <tr>
                <td class="cover-meta-label">Basis Arsitektur:</td>
                <td class="cover-meta-val">Hybrid Monolith (Inertia.js Bridge + Vue 3 SPA via REST API)</td>
            </tr>
            <tr>
                <td class="cover-meta-label">Backend Engine:</td>
                <td class="cover-meta-val">Laravel 12.x &bull; PHP 8.2+ &bull; MySQL 8.0 &bull; Redis</td>
            </tr>
            <tr>
                <td class="cover-meta-label">Frontend Engine:</td>
                <td class="cover-meta-val">Vue 3 (Composition API) &bull; Vite 7 &bull; Tailwind CSS v4 &bull; Reka UI</td>
            </tr>
            <tr>
                <td class="cover-meta-label">Real-Time WebSockets:</td>
                <td class="cover-meta-val">Laravel Reverb &bull; Laravel Echo &bull; Pusher JS</td>
            </tr>
            <tr>
                <td class="cover-meta-label">Aplikasi Aktif Lokal:</td>
                <td class="cover-meta-val"><a href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000 ↗</a> (Dev Server Port: 5173)</td>
            </tr>
            <tr>
                <td class="cover-meta-label">Tanggal Terbit:</td>
                <td class="cover-meta-val">{{ date('d F Y') }}</td>
            </tr>
            <tr>
                <td class="cover-meta-label">Lisensi Proyek:</td>
                <td class="cover-meta-val">Open Source MIT License</td>
            </tr>
        </table>
    </div>

    <!-- ==================== PAGE 2: DAFTAR ISI INTERAKTIF ==================== -->
    <div class="section-header" style="margin-top: 5px;">
        <div class="section-title">DAFTAR ISI INTERAKTIF</div>
        <div class="section-desc">Klik pada judul bab untuk melompat langsung ke halaman topik yang dituju</div>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 12%;">Bab</th>
                <th style="width: 70%;">Pokok Bahasan &amp; Modul</th>
                <th style="width: 18%; text-align: right;">Aksi Cepat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>BAB 1</strong></td>
                <td><a href="#bab-1"><strong>Gambaran Umum &amp; Arsitektur Hybrid Monolith</strong></a><br>Konsep arsitektur, diagram alur request, single sign-on, dan struktur direktori bersih.</td>
                <td style="text-align: right;"><a href="#bab-1">Buka Bab 1 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 2</strong></td>
                <td><a href="#bab-2"><strong>Matriks 22+ Teknologi &amp; Persyaratan Lingkungan</strong></a><br>Daftar lengkap paket teknologi, versi, lapisan arsitektur, dan prasyarat PHP/Node.js.</td>
                <td style="text-align: right;"><a href="#bab-2">Buka Bab 2 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 3</strong></td>
                <td><a href="#bab-3"><strong>Instalasi Cepat &amp; Panduan Operasional Server</strong></a><br>Langkah setup awal, konfigurasi `.env`, migrasi, seed, serta menjalankan 4 server proses.</td>
                <td style="text-align: right;"><a href="#bab-3">Buka Bab 3 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 4</strong></td>
                <td><a href="#bab-4"><strong>Tutorial Menambah Halaman Baru (Inertia vs SPA)</strong></a><br>Panduan *step-by-step* membuat modul di Inertia.js dan di Traditional Vue Router SPA.</td>
                <td style="text-align: right;"><a href="#bab-4">Buka Bab 4 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 5</strong></td>
                <td><a href="#bab-5"><strong>Keamanan, Otorisasi RBAC, Audit Trail, &amp; Impersonasi</strong></a><br>Role &amp; permission Spatie, audit trail otomatis, dan fitur Super Admin Impersonation.</td>
                <td style="text-align: right;"><a href="#bab-5">Buka Bab 5 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 6</strong></td>
                <td><a href="#bab-6"><strong>Katalog Komponen UI &amp; Interaktivitas Reusable</strong></a><br>BaseDataTable, BaseChart (ECharts), BaseMap (MapLibre), CommandPalette, useDate, Sonner.</td>
                <td style="text-align: right;"><a href="#bab-6">Buka Bab 6 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 7</strong></td>
                <td><a href="#bab-7"><strong>Layanan Data: Pencarian, Berkas, QueryBuilder, &amp; Backup</strong></a><br>Laravel Scout, Spatie MediaLibrary WebP, Spatie QueryBuilder, Backup, &amp; Excel/PDF.</td>
                <td style="text-align: right;"><a href="#bab-7">Buka Bab 7 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 8</strong></td>
                <td><a href="#bab-8"><strong>Real-Time WebSockets &amp; Telemetri Monitoring</strong></a><br>Event broadcasting Laravel Reverb, live chat, audio chime, Laravel Pulse, dan Sentry.</td>
                <td style="text-align: right;"><a href="#bab-8">Buka Bab 8 &rarr;</a></td>
            </tr>
            <tr>
                <td><strong>BAB 9</strong></td>
                <td><a href="#bab-9"><strong>Katalog API Endpoints &amp; Checklist Rilis Produksi</strong></a><br>Tabel rute REST API lengkap, pengujian otomatis, dan panduan deployment server.</td>
                <td style="text-align: right;"><a href="#bab-9">Buka Bab 9 &rarr;</a></td>
            </tr>
        </tbody>
    </table>

    <div class="callout callout-purple">
        <div class="callout-title">Tautan Layanan Interaktif Lokal</div>
        Saat aplikasi sedang berjalan, Anda dapat mengklik tautan berikut untuk membuka layanan terkait secara langsung:<br>
        &bull; <strong>Aplikasi Utama / Login:</strong> <a href="http://127.0.0.1:8000/login" target="_blank">http://127.0.0.1:8000/login ↗</a> &nbsp;|&nbsp; 
        &bull; <strong>Interactive Scramble OpenAPI:</strong> <a href="http://127.0.0.1:8000/docs/api" target="_blank">http://127.0.0.1:8000/docs/api ↗</a><br>
        &bull; <strong>Laravel Pulse Telemetry:</strong> <a href="http://127.0.0.1:8000/pulse" target="_blank">http://127.0.0.1:8000/pulse ↗</a> &nbsp;|&nbsp; 
        &bull; <strong>Repositori GitHub Resmi:</strong> <a href="https://github.com/paradigma-monolith/starterkit_paradigma" target="_blank">paradigma-monolith/starterkit_paradigma ↗</a>
    </div>

    <!-- ==================== BAB 1 (FLOWS NATURALLY) ==================== -->
    <div id="bab-1" class="section-header">
        <div class="section-title">BAB 1: GAMBARAN UMUM &amp; ARSITEKTUR HYBRID MONOLITH</div>
        <div class="section-desc">Pondasi Dual-Paradigma Antarmuka dalam Satu Backend Terpadu</div>
    </div>

    <h3>1.1 Konsep Hybrid Monolith</h3>
    <p>
        Banyak tim pengembang mengalami dilema antara memilih arsitektur <em>Server-Driven Monolith</em> (cepat dibuat, SEO-friendly, tanpa boilerplate API) atau <em>Decoupled SPA</em> (client-side routing instan, arsitektur micro-frontend, decoupled REST API). Starter kit ini memecahkan dilema tersebut dengan menggabungkan **keduanya secara harmonis**:
    </p>

    <div class="diagram-container">
+-----------------------------------------------------------------------------------+
|                           PENGGUNA / BROWSER CLIENT                               |
+-----------------------------------------------------------------------------------+
        |                                                   |
        | [1] Akses Rute "/" & "/inertia/*"                 | [2] Akses Rute "/spa/*"
        v                                                   v
+-------------------------------+                   +-------------------------------+
|     INERTIA.JS BRIDGE         |                   |     TRADITIONAL SPA           |
| - Server-Driven Routing       |                   | - Client-Side Vue Router      |
| - Controller render() props   |                   | - Pinia State Management      |
| - Zero API Boilerplate        |                   | - Asynchronous Axios Client   |
+-------------------------------+                   +-------------------------------+
        |                                                   |
        |                                                   | [3] Ajax / REST API Calls
        |                                                   v
        |                                           +-------------------------------+
        |                                           |      LARAVEL REST API         |
        |                                           |   Endpoint: /api/v1/*         |
        +-------------------------+-----------------+-------------------------------+
                                  |
                                  v
+-----------------------------------------------------------------------------------+
|               LARAVEL 12 UNIFIED BACKEND & INFRASTRUCTURE LAYER                   |
| - Sanctum Stateful Cookie Auth (Single Sign-On untuk Inertia & SPA)               |
| - Spatie RBAC & Activitylog  |  Laravel Scout Search  |  Spatie MediaLibrary      |
| - Laravel Reverb WebSockets  |  Laravel Octane Engine |  MySQL 8.0 & Redis Cache  |
+-----------------------------------------------------------------------------------+
    </div>

    <h3>1.2 Single Sign-On (SSO) Stateful Session</h3>
    <p>
        Aplikasi menggunakan <strong>Laravel Sanctum Stateful Cookie Authentication</strong>. Setelah user berhasil login di <code class="inline">/login</code>:
    </p>
    <ul>
        <li>Cookie sesi HTTP-Only (<code class="inline">starterkit-paradigma-session</code>) dan <code class="inline">XSRF-TOKEN</code> disimpan secara aman di browser.</li>
        <li>Halaman Inertia.js langsung membaca sesi via controller middleware.</li>
        <li>Halaman SPA otomatis mewarisi sesi tanpa perlu menyimpan access token JWT di <code class="inline">localStorage</code> (mencegah risiko XSS token theft).</li>
    </ul>

    <h3>1.3 Struktur Direktori Bersih &amp; Terorganisir</h3>
    <pre>c:\Program Files\Ampps\www\starterkit_paradigma/
├── app/
│   ├── Exports/                     # Handler ekspor Excel, CSV, PDF (AuditLogsExport.php)
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/                 # REST API: GlobalSearch, Media, Users, Stats
│   │   │   ├── Auth/                # AuthController (Login/Logout), PasswordReset
│   │   │   ├── Inertia/             # DashboardController (Inertia::render)
│   │   │   └── ExportController.php # Download handler Excel, CSV, PDF, Manual Book
│   │   └── Middleware/              # HandleInertiaRequests (Shared props & Impersonation)
│   ├── Models/                      # Eloquent Models (User, LoginHistory, ChatMessage)
│   └── Notifications/               # Reverb Real-Time Broadcast Notifications
├── config/                          # Konfigurasi: backup, scout, media-library, pulse
├── database/migrations/             # Skema tabel: users, media, activity_log, chat
├── resources/
│   ├── css/app.css                  # Tailwind CSS v4 + Vue Sonner styles
│   ├── js/
│   │   ├── Components/              # BaseDataTable, BaseChart, BaseMap, CommandPalette
│   │   ├── composables/useDate.js   # Day.js localized Indonesian formatter
│   │   ├── Pages/                   # Halaman Inertia: Auth/Login, Inertia/Dashboard
│   │   └── spa/                     # Traditional SPA: router, stores (Pinia), views
└── routes/                          # web.php, api.php, channels.php, console.php</pre>

    <!-- ==================== BAB 2 ==================== -->
    <div id="bab-2" class="section-header">
        <div class="section-title">BAB 2: MATRIKS 22+ TEKNOLOGI &amp; PERSYARATAN SISTEM</div>
        <div class="section-desc">Katalog Lengkap Seluruh Pustaka &amp; Mesin yang Terintegrasi</div>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 24%;">Teknologi &amp; Paket</th>
                <th style="width: 14%;">Lapisan / Versi</th>
                <th style="width: 42%;">Tanggung Jawab &amp; Peran Sistem</th>
                <th style="width: 20%;">Berkas Konfigurasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Laravel 12</strong></td>
                <td>Backend (v12.x)</td>
                <td>Fondasi framework utama, MVC, routing, Eloquent ORM.</td>
                <td><code class="inline">config/app.php</code></td>
            </tr>
            <tr>
                <td><strong>Vue 3</strong></td>
                <td>Frontend (v3.5)</td>
                <td>Reactive UI berbasis Composition API &amp; script setup.</td>
                <td><code class="inline">package.json</code></td>
            </tr>
            <tr>
                <td><strong>Inertia.js v2</strong></td>
                <td>Bridge Monolith</td>
                <td>Server-driven monolith bridge dengan props controller langsung.</td>
                <td><code class="inline">HandleInertiaRequests</code></td>
            </tr>
            <tr>
                <td><strong>Vue Router &amp; Pinia</strong></td>
                <td>Traditional SPA</td>
                <td>Client-side routing (History mode) dan global reactive store.</td>
                <td><code class="inline">resources/js/spa/</code></td>
            </tr>
            <tr>
                <td><strong>Tailwind CSS v4</strong></td>
                <td>Design System</td>
                <td>Utility-first styling performa tinggi dengan dark mode.</td>
                <td><code class="inline">resources/css/app.css</code></td>
            </tr>
            <tr>
                <td><strong>Reka UI</strong></td>
                <td>Headless UI</td>
                <td>Accessible headless primitives untuk modal dan dialogs.</td>
                <td><code class="inline">package.json</code></td>
            </tr>
            <tr>
                <td><strong>Command Palette</strong></td>
                <td>Interaksi (`Ctrl+K`)</td>
                <td>Pencarian global cepat dan eksekusi aksi navigasi instan.</td>
                <td><code class="inline">CommandPalette.vue</code></td>
            </tr>
            <tr>
                <td><strong>Vue Sonner</strong></td>
                <td>Notifikasi Toast</td>
                <td>Toast melayang responsif dark mode dengan audio chime.</td>
                <td><code class="inline">resources/css/app.css</code></td>
            </tr>
            <tr>
                <td><strong>Apache ECharts 6</strong></td>
                <td>Visualisasi Grafik</td>
                <td>Komponen grafik reaktif dark/light mode dan auto-resize.</td>
                <td><code class="inline">BaseChart.vue</code></td>
            </tr>
            <tr>
                <td><strong>MapLibre GL 6</strong></td>
                <td>Peta Geospasial</td>
                <td>Peta interaktif 3D layer, marker kustom, dan tema otomatis.</td>
                <td><code class="inline">BaseMap.vue</code></td>
            </tr>
            <tr>
                <td><strong>Spatie QueryBuilder</strong></td>
                <td>Data Filtering</td>
                <td>Standarisasi sortir, filter, dan pagination endpoint REST API.</td>
                <td><code class="inline">routes/api.php</code></td>
            </tr>
            <tr>
                <td><strong>BaseDataTable</strong></td>
                <td>Komponen Data</td>
                <td>Tabel data dinamis multi-kolom sort, search, &amp; pagination.</td>
                <td><code class="inline">BaseDataTable.vue</code></td>
            </tr>
            <tr>
                <td><strong>Day.js (useDate)</strong></td>
                <td>Waktu &amp; Tanggal</td>
                <td>Standarisasi waktu Indonesia (`DD MMMM YYYY`, `fromNow()`).</td>
                <td><code class="inline">useDate.js</code></td>
            </tr>
            <tr>
                <td><strong>Laravel Scout v11</strong></td>
                <td>Full-Text Search</td>
                <td>Pencarian teks penuh model terhubung ke Command Palette.</td>
                <td><code class="inline">config/scout.php</code></td>
            </tr>
            <tr>
                <td><strong>Spatie MediaLibrary</strong></td>
                <td>File Management</td>
                <td>Koleksi berkas, auto-conversion WebP, dan REST API upload.</td>
                <td><code class="inline">config/media-library.php</code></td>
            </tr>
            <tr>
                <td><strong>Spatie Permission</strong></td>
                <td>Otorisasi RBAC</td>
                <td>Manajemen hak akses role (Super Admin, Admin, Staff).</td>
                <td><code class="inline">config/permission.php</code></td>
            </tr>
            <tr>
                <td><strong>Spatie Activitylog</strong></td>
                <td>Audit Trail</td>
                <td>Perekam jejak mutasi data model otomatis di `activity_log`.</td>
                <td><code class="inline">config/activitylog.php</code></td>
            </tr>
            <tr>
                <td><strong>Laravel Impersonate</strong></td>
                <td>Bantuan Pengguna</td>
                <td>Super Admin dapat login sementara sebagai user lain.</td>
                <td><code class="inline">routes/web.php</code></td>
            </tr>
            <tr>
                <td><strong>Laravel Reverb</strong></td>
                <td>WebSockets</td>
                <td>Real-time bi-directional WebSocket server lokal tanpa Pusher.</td>
                <td><code class="inline">config/reverb.php</code></td>
            </tr>
            <tr>
                <td><strong>Laravel Octane &amp; RR</strong></td>
                <td>High-Performance</td>
                <td>Server super cepat RoadRunner (`rr.exe`) &amp; worker stateful.</td>
                <td><code class="inline">config/octane.php</code></td>
            </tr>
            <tr>
                <td><strong>Laravel Pulse</strong></td>
                <td>Health Telemetri</td>
                <td>Dashboard monitoring CPU, memori, slow query, dan antrean.</td>
                <td><code class="inline">config/pulse.php</code></td>
            </tr>
            <tr>
                <td><strong>Spatie Backup v9</strong></td>
                <td>Cadangan Sistem</td>
                <td>Pencadangan database MySQL dan penyimpanan berkas otomatis.</td>
                <td><code class="inline">config/backup.php</code></td>
            </tr>
        </tbody>
    </table>

    <!-- ==================== BAB 3 ==================== -->
    <div id="bab-3" class="section-header">
        <div class="section-title">BAB 3: INSTALASI CEPAT &amp; OPERASIONAL SERVER</div>
        <div class="section-desc">Menyiapkan Lingkungan Pengembangan dan Menjalankan Servis</div>
    </div>

    <h3>3.1 Persyaratan Lingkungan (Environment Prerequisites)</h3>
    <ul>
        <li><strong>Sistem Operasi:</strong> Windows 10/11, Linux (Ubuntu 22.04+), atau macOS.</li>
        <li><strong>PHP:</strong> Versi 8.2.x (Wajib modul: <code class="inline">zip</code>, <code class="inline">pdo_mysql</code>, <code class="inline">curl</code>, <code class="inline">mbstring</code>, <code class="inline">openssl</code>).</li>
        <li><strong>Node.js:</strong> Versi LTS v20.x atau v24.x dengan NPM versi 10+.</li>
        <li><strong>Basis Data:</strong> MySQL versi 8.0 atau MariaDB 10.4+.</li>
    </ul>

    <h3>3.2 Perintah Instalasi Awal (Setup 1 Kali)</h3>
    <pre># 1. Masuk ke direktori proyek dan salin berkas konfigurasi .env
cd "c:\Program Files\Ampps\www\starterkit_paradigma"
cp .env.example .env

# 2. Pasang dependensi PHP dan Node.js
composer install --no-interaction --prefer-dist
npm install

# 3. Generate Application Encryption Key &amp; Storage Symlink
php artisan key:generate
php artisan storage:link

# 4. Pastikan database MySQL 'hybrid_laravel' sudah dibuat di MySQL Anda
# Lalu jalankan migrasi tabel dan data seeder bawaan:
php artisan migrate:fresh --seed</pre>

    <h3>3.3 Menjalankan Servis Aplikasi (Multi-Process Server)</h3>
    <p>Untuk menjalankan seluruh fitur interaktif (Backend, Frontend HMR, WebSockets, dan Telemetri):</p>
    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 25%;">Layanan</th>
                <th style="width: 45%;">Perintah Terminal</th>
                <th style="width: 30%;">Port &amp; Endpoint Akses</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Laravel Backend</strong></td>
                <td><code class="inline">php artisan serve --port=8000</code></td>
                <td><a href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000 ↗</a></td>
            </tr>
            <tr>
                <td><strong>Vite Frontend HMR</strong></td>
                <td><code class="inline">npm run dev</code></td>
                <td><a href="http://localhost:5173" target="_blank">http://localhost:5173 ↗</a></td>
            </tr>
            <tr>
                <td><strong>Reverb WebSockets</strong></td>
                <td><code class="inline">php artisan reverb:start --port=8080</code></td>
                <td>ws://127.0.0.1:8080 (Real-Time)</td>
            </tr>
            <tr>
                <td><strong>Octane RoadRunner</strong></td>
                <td><code class="inline">./rr.exe serve</code></td>
                <td>High-Performance Worker Server</td>
            </tr>
        </tbody>
    </table>

    <div class="callout callout-success">
        <div class="callout-title">Kredensial Login Bawaan (Otomatis Dibuat oleh Seeder)</div>
        &bull; <strong>Email Super Admin:</strong> <code class="inline">admin@hybrid.local</code> &nbsp;|&nbsp; <strong>Password:</strong> <code class="inline">password</code><br>
        &bull; <strong>Email Staff:</strong> <code class="inline">staff@hybrid.local</code> &nbsp;|&nbsp; <strong>Password:</strong> <code class="inline">password</code>
    </div>

    <!-- ==================== BAB 4 ==================== -->
    <div id="bab-4" class="section-header">
        <div class="section-title">BAB 4: TUTORIAL MENAMBAH HALAMAN BARU</div>
        <div class="section-desc">Alur Pengembangan Fitur Baru pada Inertia Bridge dan SPA</div>
    </div>

    <h3>4.1 Menambahkan Modul Baru di Inertia.js Bridge</h3>
    <ol>
        <li><strong>Langkah 1 - Buat Controller Laravel:</strong>
            <pre>namespace App\Http\Controllers;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;

class ProductController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Products/Index', [
            'products' => User::latest()->paginate(10),
            'title' => 'Katalog Produk Utama',
        ]);
    }
}</pre>
        </li>
        <li><strong>Langkah 2 - Daftarkan Rute di <code class="inline">routes/web.php</code>:</strong>
            <pre>Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});</pre>
        </li>
        <li><strong>Langkah 3 - Buat Komponen Tampilan di <code class="inline">resources/js/Pages/Products/Index.vue</code>:</strong>
            <pre>&lt;script setup&gt;
import HybridNavbar from '@/Components/HybridNavbar.vue';
import BaseDataTable from '@/Components/BaseDataTable.vue';

defineProps({ products: Object, title: String });

const columns = [
  { key: 'name', label: 'Nama', sortable: true },
  { key: 'email', label: 'Email', sortable: true },
];
&lt;/script&gt;

&lt;template&gt;
  &lt;div class="min-h-screen bg-slate-50 dark:bg-slate-950"&gt;
    &lt;HybridNavbar mode="inertia" currentRoute="products" /&gt;
    &lt;main class="max-w-7xl mx-auto px-4 py-8"&gt;
      &lt;h1 class="text-xl font-bold text-slate-900 dark:text-white mb-6"&gt;@{{ title }}&lt;/h1&gt;
      &lt;BaseDataTable :columns="columns" :data="products" /&gt;
    &lt;/main&gt;
  &lt;/div&gt;
&lt;/template&gt;</pre>
        </li>
    </ol>

    <h3>4.2 Menambahkan Modul Baru di Traditional SPA</h3>
    <ol>
        <li><strong>Langkah 1 - Buat View SPA:</strong> Di <code class="inline">resources/js/spa/views/AnalyticsView.vue</code>.</li>
        <li><strong>Langkah 2 - Daftarkan di Vue Router (<code class="inline">resources/js/spa/router/index.js</code>):</strong>
            <pre>{
  path: '/analytics',
  name: 'spa-analytics',
  component: () => import('../views/AnalyticsView.vue'),
}</pre>
        </li>
        <li><strong>Langkah 3 - Ambil Data Asinkron via Axios:</strong>
            <pre>import axios from 'axios';
import { ref, onMounted } from 'vue';

const data = ref([]);
onMounted(async () => {
  const res = await axios.get('/api/v1/users');
  data.value = res.data;
});</pre>
        </li>
    </ol>

    <!-- ==================== BAB 5 ==================== -->
    <div id="bab-5" class="section-header">
        <div class="section-title">BAB 5: KEAMANAN, RBAC, AUDIT TRAIL, &amp; IMPERSONASI</div>
        <div class="section-desc">Manajemen Akses Enterprise dan Keselamatan Operasional</div>
    </div>

    <h3>5.1 Otorisasi Berbasis Peran (Spatie Laravel Permission)</h3>
    <p>
        Setiap pengguna dapat memiliki satu atau lebih peran (<code class="inline">roles</code>) dan izin akses (<code class="inline">permissions</code>). Pengecekan dapat dilakukan secara deklaratif:
    </p>
    <pre>// Pengecekan di Controller
public function destroy(User $user) {
    if (!auth()->user()->can('delete users')) {
        abort(403, 'Anda tidak memiliki hak akses menghapus pengguna.');
    }
    $user->delete();
}

// Pengecekan di Route Definition
Route::get('/admin/settings', [AdminController::class, 'settings'])
    ->middleware(['auth', 'role:Super Admin']);</pre>

    <h3>5.2 Jejak Audit Otomatis (Spatie Laravel Activitylog)</h3>
    <p>
        Model <code class="inline">User</code> secara bawaan mengimplementasikan trait <code class="inline">LogsActivity</code>. Setiap perubahan atribut (seperti perubahan nama, email, atau avatar) otomatis disimpan ke tabel <code class="inline">activity_log</code> tanpa perlu baris kode manual:
    </p>
    <pre>// Mengambil riwayat log aktivitas user terakhir
$logs = \Spatie\Activitylog\Models\Activity::where('causer_id', auth()->id())
    ->latest()
    ->take(10)
    ->get();</pre>

    <h3>5.3 User Impersonation (Login Sebagai Pengguna Lain)</h3>
    <p>
        Fitur esensial bagi Super Admin untuk mereproduksi kendala yang dialami staf/pengguna secara langsung tanpa perlu meminta kata sandi mereka:
    </p>
    <ul>
        <li><strong>Cara Menyamar:</strong> Kunjungi tautan <code class="inline">/impersonate/take/{userId}</code> (khusus Super Admin).</li>
        <li><strong>Safety Warning Banner:</strong> Banner warna oranye interaktif otomatis tampil di puncak navigasi <code class="inline">HybridNavbar.vue</code>.</li>
        <li><strong>Kembali ke Super Admin:</strong> Klik tombol *"Kembali ke Super Admin ✕"* di banner atau kunjungi <code class="inline">/impersonate/leave</code>.</li>
    </ul>

    <!-- ==================== BAB 6 ==================== -->
    <div id="bab-6" class="section-header">
        <div class="section-title">BAB 6: KATALOG KOMPONEN UI &amp; INTERAKTIVITAS</div>
        <div class="section-desc">Komponen Reusable Siap Pakai yang Responsif Tema Gelap &amp; Terang</div>
    </div>

    <h3>6.1 Tabel Data Enterprise (BaseDataTable.vue)</h3>
    <p>
        Komponen serbaguna untuk menampilkan koleksi data tabular baik dari data pagination Laravel maupun array JavaScript lokal:
    </p>
    <pre>&lt;script setup&gt;
import BaseDataTable from '@/Components/BaseDataTable.vue';
import { useDate } from '@/composables/useDate';
const { formatDate } = useDate();

const columns = [
  { key: 'name', label: 'Nama Lengkap', sortable: true },
  { key: 'email', label: 'Email Kantor', sortable: true },
  { key: 'created_at', label: 'Terdaftar Sejak', sortable: true },
];
&lt;/script&gt;

&lt;template&gt;
  &lt;BaseDataTable :columns="columns" :data="users" :searchable="true"&gt;
    &lt;template #cell(created_at)="{ value }"&gt;
      @{{ formatDate(value) }}
    &lt;/template&gt;
  &lt;/BaseDataTable&gt;
&lt;/template&gt;</pre>

    <h3>6.2 Visualisasi Grafik (BaseChart.vue) &amp; Peta 3D (BaseMap.vue)</h3>
    <pre>// 1. Grafik ECharts Responsif Tema Gelap/Terang
&lt;BaseChart :option="{
  xAxis: { type: 'category', data: ['Jan', 'Feb', 'Mar', 'Apr'] },
  yAxis: { type: 'value' },
  series: [{ data: [150, 230, 224, 218], type: 'line', smooth: true }]
}" height="320px" /&gt;

// 2. Peta Geospasial MapLibre GL dengan Marker 3D
&lt;BaseMap :markers="[
  { id: 1, name: 'Kantor Cabang Jakarta', coordinates: [106.8272, -6.1751], status: 'online' }
]" height="400px" /&gt;</pre>

    <h3>6.3 Command Palette (`Ctrl + K`) &amp; Vue Sonner Toast</h3>
    <ul>
        <li><strong>Buka Command Palette:</strong> Tekan shortcut <code class="inline">Ctrl + K</code> atau <code class="inline">Cmd + K</code> pada keyboard.</li>
        <li><strong>Pencarian Instan:</strong> Mengetik kata kunci akan mencari menu sistem, perintah navigasi, dan akun pengguna via Laravel Scout.</li>
        <li><strong>Trigger Toast Notifikasi:</strong>
            <pre>import { toast } from 'vue-sonner';
toast.success('Pembaruan data berhasil disimpan!');
toast.error('Gagal memproses permintaan.');</pre>
        </li>
    </ul>

    <!-- ==================== BAB 7 ==================== -->
    <div id="bab-7" class="section-header">
        <div class="section-title">BAB 7: LAYANAN DATA, PENCARIAN, &amp; BERKAS</div>
        <div class="section-desc">Integrasi Media, Full-Text Search, QueryBuilder, &amp; Backup</div>
    </div>

    <h3>7.1 Manajemen Berkas &amp; Lampiran (Spatie MediaLibrary)</h3>
    <p>
        Model <code class="inline">User</code> secara otomatis mengimplementasikan <code class="inline">HasMedia</code> lengkap dengan pembuatan thumbnail WebP non-queued:
    </p>
    <pre>// Mengunggah berkas avatar pengguna via Request Controller
$user = auth()->user();
$media = $user->addMediaFromRequest('file')->toMediaCollection('avatars');

// Mengambil URL berkas asli dan versi thumbnail:
$fullUrl = $user->getFirstMediaUrl('avatars');
$thumbUrl = $user->getFirstMediaUrl('avatars', 'thumb'); // 150x150 WebP</pre>

    <h3>7.2 Pencarian Teks Penuh (Laravel Scout)</h3>
    <p>
        Model didaftarkan dengan trait <code class="inline">Searchable</code> dan metode <code class="inline">toSearchableArray()</code>. Pencarian teks penuh dapat dilakukan dengan sederhana:
    </p>
    <pre>// Menjalankan full-text search pada model User
$users = User::search('budi santoso')->get();</pre>

    <h3>7.3 Server-Side Query Builder (Spatie QueryBuilder)</h3>
    <p>
        Menghilangkan keharusan menulis logika <code class="inline">if ($request->has(...))</code> yang panjang:
    </p>
    <pre>$users = QueryBuilder::for(User::class)
    ->allowedFilters(['name', 'email'])
    ->allowedSorts(['id', 'name', 'created_at'])
    ->defaultSort('-created_at')
    ->paginate(15);</pre>

    <h3>7.4 Pencadangan Database &amp; Berkas (Spatie Backup)</h3>
    <pre># Jalankan backup database MySQL saja
php artisan backup:run --only-db

# Bersihkan backup yang sudah melewati retensi
php artisan backup:clean</pre>

    <!-- ==================== BAB 8 & 9 ==================== -->
    <div id="bab-8" class="section-header">
        <div class="section-title">BAB 8: REAL-TIME WEBSOCKETS &amp; TELEMETRI</div>
        <div class="section-desc">Pusat Komunikasi Dua Arah &amp; Pemantauan Performa Server</div>
    </div>

    <h3>8.1 Laravel Reverb WebSockets</h3>
    <p>
        Reverb adalah server WebSocket berkecepatan tinggi yang terintegrasi langsung dengan Laravel Echo di Vue 3:
    </p>
    <pre>// Di sisi Controller: Menyiarkan Event Real-Time
broadcast(new ChatMessageSent($message))->toOthers();

// Di sisi Vue 3: Mendengarkan Siaran Event Real-Time
window.Echo.private(`chat.${roomId}`)
  .listen('ChatMessageSent', (e) => {
    messages.value.push(e.message);
  });</pre>

    <h3>8.2 Pemantauan Kesehatan Aplikasi (Laravel Pulse)</h3>
    <p>
        Akses antarmuka pemantauan internal di <a href="http://127.0.0.1:8000/pulse" target="_blank">http://127.0.0.1:8000/pulse ↗</a> untuk melihat metrik:
    </p>
    <ul>
        <li><strong>Slow Queries:</strong> Query database MySQL yang memakan waktu eksekusi > 100ms.</li>
        <li><strong>Slow Requests:</strong> Endpoint HTTP dengan waktu respon di atas ambang batas.</li>
        <li><strong>Queue Monitoring:</strong> Throughput antrean background jobs dan failed jobs.</li>
        <li><strong>Application Usage:</strong> Pengguna paling aktif di dalam sistem.</li>
    </ul>

    <!-- BAB 9 -->
    <div id="bab-9" class="section-header">
        <div class="section-title">BAB 9: KATALOG API ENDPOINTS &amp; CHECKLIST RILIS</div>
        <div class="section-desc">Katalog REST API Siap Pakai &amp; Standarisasi Deployment Produksi</div>
    </div>

    <h3>9.1 Katalog REST API Endpoints Terpadu</h3>
    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 12%;">Method</th>
                <th style="width: 32%;">Endpoint URL</th>
                <th style="width: 16%;">Autentikasi</th>
                <th style="width: 40%;">Fungsi &amp; Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span class="badge badge-get">GET</span></td>
                <td><code class="inline">/api/v1/stats</code></td>
                <td>Public</td>
                <td>Mengambil status telemetri infrastruktur &amp; modul.</td>
            </tr>
            <tr>
                <td><span class="badge badge-get">GET</span></td>
                <td><code class="inline">/api/v1/search?q={query}</code></td>
                <td>Sanctum</td>
                <td>Pencarian global cepat via Laravel Scout.</td>
            </tr>
            <tr>
                <td><span class="badge badge-get">GET</span></td>
                <td><code class="inline">/api/v1/users</code></td>
                <td>Sanctum</td>
                <td>Daftar pengguna terpaginasi via Spatie QueryBuilder.</td>
            </tr>
            <tr>
                <td><span class="badge badge-post">POST</span></td>
                <td><code class="inline">/api/v1/media/upload</code></td>
                <td>Sanctum</td>
                <td>Mengunggah berkas/avatar via Spatie MediaLibrary.</td>
            </tr>
            <tr>
                <td><span class="badge badge-get">GET</span></td>
                <td><code class="inline">/api/v1/media</code></td>
                <td>Sanctum</td>
                <td>Mendapatkan daftar berkas media milik user.</td>
            </tr>
            <tr>
                <td><span class="badge badge-delete">DELETE</span></td>
                <td><code class="inline">/api/v1/media/{id}</code></td>
                <td>Sanctum</td>
                <td>Menghapus berkas lampiran media.</td>
            </tr>
            <tr>
                <td><span class="badge badge-get">GET</span></td>
                <td><code class="inline">/api/v1/profile</code></td>
                <td>Sanctum</td>
                <td>Melihat profil akun dan peran aktif.</td>
            </tr>
            <tr>
                <td><span class="badge badge-patch">PATCH</span></td>
                <td><code class="inline">/api/v1/profile</code></td>
                <td>Sanctum</td>
                <td>Memperbarui nama dan email pengguna.</td>
            </tr>
            <tr>
                <td><span class="badge badge-get">GET</span></td>
                <td><code class="inline">/api/v1/audit-logs</code></td>
                <td>Sanctum</td>
                <td>Melihat daftar riwayat audit trail aktivitas.</td>
            </tr>
        </tbody>
    </table>

    <h3>9.2 Checklist Standarisasi Rilis Produksi</h3>
    <ol>
        <li><strong>Jalankan Rangkaian Pengujian:</strong> Pastikan seluruh 56 tests lulus tanpa kegagalan:
            <pre>php artisan test</pre>
        </li>
        <li><strong>Konfigurasi Berkas Environment Produksi:</strong>
            <pre>APP_ENV=production
APP_DEBUG=false
APP_URL=https://aplikasianda.com</pre>
        </li>
        <li><strong>Jalankan Optimasi Cache Laravel:</strong>
            <pre>php artisan config:cache &amp;&amp; php artisan route:cache &amp;&amp; php artisan view:cache</pre>
        </li>
        <li><strong>Kompilasi Aset Frontend Produksi:</strong>
            <pre>npm run build</pre>
        </li>
    </ol>

    <div style="margin-top: 25px; text-align: center; color: #94a3b8; font-size: 8.5px; border-top: 1px solid #e2e8f0; padding-top: 10px;">
        Dokumen ini diterbitkan secara otomatis oleh <strong>Paradigma Monolith Ecosystem</strong> &bull; Dilisensikan di bawah Lisensi MIT.
    </div>

</body>
</html>
