@echo off
echo 🚀 Setup MySQL Database untuk SILOG
echo.

echo [1/5] Creating database...
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS silog_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo [2/5] Running migrations...
php artisan migrate --force

echo [3/5] Seeding database with content...
php artisan db:seed --class=ContentSeeder --force

echo [4/5] Optimizing for production...
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo [5/5] Starting server...
echo.
echo ✅ MySQL setup complete!
echo 📊 Database: silog_db
echo 🌐 Server: http://127.0.0.1:8000
echo 🔧 Admin: http://127.0.0.1:8000/admin
echo.

start /B php artisan serve --host=127.0.0.1 --port=8000
timeout /t 2 /nobreak >nul

echo 🎉 SILOG website ready with MySQL!
pause