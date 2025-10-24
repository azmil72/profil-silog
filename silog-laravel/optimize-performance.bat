@echo off
echo Mengoptimalkan performa Laravel SILOG...

echo [1/6] Clearing cache...
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo [2/6] Optimizing configuration...
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo [3/6] Optimizing Composer autoloader...
composer dump-autoload --optimize --no-dev

echo [4/6] Creating storage directories...
if not exist "storage\framework\cache\data" mkdir storage\framework\cache\data
if not exist "storage\framework\sessions" mkdir storage\framework\sessions
if not exist "storage\framework\views" mkdir storage\framework\views

echo [5/6] Setting permissions...
icacls storage /grant Everyone:(OI)(CI)F /T
icacls bootstrap\cache /grant Everyone:(OI)(CI)F /T

echo [6/6] Generating application key if needed...
php artisan key:generate --show

echo.
echo ✅ Optimasi selesai! Website seharusnya lebih cepat sekarang.
echo.
echo Tips tambahan:
echo - Gunakan CDN untuk gambar
echo - Aktifkan OPcache di server
echo - Gunakan database MySQL/PostgreSQL untuk produksi
echo.
pause