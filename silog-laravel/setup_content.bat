@echo off
echo Setting up SILOG Content Management System...
echo.

echo Running migrations...
php artisan migrate --force

echo.
echo Seeding initial content...
php artisan db:seed --class=ContentSeeder

echo.
echo Setup completed successfully!
echo.
echo You can now access:
echo - Website: http://localhost:8000
echo - Admin Panel: http://localhost:8000/admin
echo.
pause