
# Create controllers
php artisan make:controller VG/GameController --resource
php artisan make:controller VG/PlatformController --resource
php artisan make:controller VG/CharacterController --resource
php artisan make:controller VG/CompanyController --resource
php artisan make:controller VG/ReviewController --resource
php artisan make:controller VG/GenreController --resource
php artisan make:controller UserLists --resource

php artisan storage:link
