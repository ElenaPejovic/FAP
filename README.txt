php artisan make:seeder CabinSeeder
php artisan make:seeder FrameSeeder
php artisan make:seeder TrunkSeeder
php artisan make:seeder TypeSeeder
php artisan make:seeder UpgradeSeeder
php artisan make:migration create_vehicle
php artisan make:model Cabin
php artisan make:model Frame
php artisan make:model Trunk
php artisan make:model Types
php artisan make:model Upgrade
php artisan make:model Vehicle
php artisan make:controller CabinController
php artisan make:controller FrameController
php artisan make:controller TrunkController
php artisan make:controller TypeController
php artisan make:controller UpgradeController
php artisan make:controller UserController
php artisan make:controller AdminController
php artisan migrate
php artisan db:seed
composer require laravel/breeze
php artisan breeze:install