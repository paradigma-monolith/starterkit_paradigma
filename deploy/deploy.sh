#!/usr/bin/env bash
# ==============================================================================
# Automated Production Deployment Script
# Usage: ./deploy/deploy.sh
# ==============================================================================

set -e

echo "🚀 [1/9] Memulai proses deployment aplikasi..."
cd "$(dirname "$0")/.."

# 1. Aktifkan mode maintenance
echo "🔒 [2/9] Mengaktifkan mode maintenance..."
php artisan down --render="errors::503" --secret="paradigma-deploy-bypass" || true

# 2. Ambil perubahan terbaru dari repositori Git
echo "📥 [3/9] Menarik kode terbaru dari remote Git..."
git pull origin main

# 3. Pasang / Perbarui dependensi PHP (tanpa paket dev untuk kecepatan dan keamanan)
echo "📦 [4/9] Menginstal dependensi Composer produksi..."
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# 4. Pasang / Perbarui dependensi Node & kompilasi aset frontend
echo "🎨 [5/9] Mengompilasi aset Vite produksi (Vue 3 + Tailwind v4)..."
npm ci --prefer-offline --no-audit
npm run build

# 5. Jalankan migrasi database
echo "🗄️ [6/9] Menjalankan migrasi database..."
php artisan migrate --force

# 6. Bersihkan & Optimalkan Cache Laravel (Config, Routes, Views, Events)
echo "⚡ [7/9] Mengoptimalkan cache Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# 7. Muat ulang antrean Queue & Supervisor Daemons
echo "🔄 [8/9] Memuat ulang Laravel Queue & Reverb WebSockets..."
php artisan queue:restart
if command -v supervisorctl &> /dev/null; then
    supervisorctl reread
    supervisorctl update
    supervisorctl restart starterkit-worker:* || true
    supervisorctl restart starterkit-reverb:* || true
fi

# 8. Matikan mode maintenance
echo "🔓 [9/9] Mematikan mode maintenance. Aplikasi kini LIVE!"
php artisan up

echo "✅ Deployment selesai dengan sukses!"
