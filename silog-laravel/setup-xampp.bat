@echo off
echo 🚀 Setup SILOG dengan XAMPP MySQL
echo.

echo [1/4] Membuat database silog_db...
echo CREATE DATABASE IF NOT EXISTS silog_db; | mysql -u root

echo [2/4] Migrasi database...
php artisan migrate --force

echo [3/4] Mengisi data content...
php artisan db:seed --class=FastContentSeeder --force

echo [4/4] Optimasi cache...
php artisan config:cache
php artisan cache:clear

echo.
echo ✅ Setup selesai!
echo 📊 Database: silog_db (MySQL)
echo 🌐 Website: http://127.0.0.1:8000
echo 🔧 Admin: http://127.0.0.1:8000/admin
echo 💾 phpMyAdmin: http://localhost/phpmyadmin
echo.

start /B php artisan serve --host=127.0.0.1 --port=8000
timeout /t 2 /nobreak >nul

echo 🎉 SILOG ready dengan MySQL!
pause