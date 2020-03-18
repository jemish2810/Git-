
Install all the dependencies using composer
    composer install
    1> composer global require laravel/installer

Create-project
	1> composer create-project --prefer-dist laravel/laravel <project_name> 

Make model
    1> php artisan make:model User -mc
    2> php artisan make:model Customer -mc

Make controller
	1> php artisan make:controller UserController
    2> php artisan make:controller Customercontroller

Configure .env file 
    change datavse,username,password

Copy the example env file and make the required configuration changes in the .env file
    cp .env.example .env

Run the database migrations (Set the database connection in .env before migrating)
    php artisan migrate

You can refresh your migrations at any point to clean the database by running the following command
    php artisan migrate:refresh

Create controller and DataTable class
    1>php artisan make:controller UsersController
    2>php artisan datatables:make Users
    
Make seed
    1> php artisan make:seeder UsersTableSeeder
    2> php artisan make:seeder CustomersTableSeeder

Seed data 
    1> php artisan db:seed 
                or
    2> php artisan db:seed --class={Tableseeder name}

Make Auth and Configure routes/web.php file 
    1> php artisan make:auth
    //composer require laravel/ui
    //php artisan ui vue --auth


Generate Realtime data / facke data (plugin)
    Refferlink:: <a href="https://kode-blog.io/laravel-5-faker-tutorial">laravel-faker-tutorial</a> 
                <a href="https://scotch.io/tutorials/generate-dummy-laravel-data-with-model-factories">laravel-data-with-model-factories(faker)</a>

	1> composer require fzaninotto/faker --dev
	2> php artisan db:seed	or 
       php artisan db:seed --class=CustomersTableSeeder

//**************************************************************************************************************************************//

<h2>Datatable plugin (Yajra)</h2>

Install Yajra Datatable Package
    RefferLink :: <a href="https://www.itsolutionstuff.com/post/laravel-58-datatables-tutorialexample.html ">(yajra)</a>
	1> composer require yajra/laravel-datatables-oracle

Register provider and facade on your config/app.php file.

    'providers' => [
        ...,
        Yajra\DataTables\DataTablesServiceProvider::class,
    ]

    'aliases' => [
        ...,
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,
    ]

Create controller and DataTable class
    1>php artisan make:controller Customercontroller
    2>php artisan datatables:make customerTable


//**************************************************************************************************************************************//
<h2>(optional cmd)</h2>
    php artisan config:cache
    php artisan config:clear
    php artisan cache:clear
    composer dump-autoload

Project Serve 
    php artisan serve

//**************************************************************************************************************************************//

Defining Observers
    1>php artisan make:observer UserObserver --model=User

Make model
    1> php artisan make:model Customer -mc

Make provider
    1> php artisan make:provider CustomerServiceProvider

register observer class into AppServiceProvider (boot method)


//**************************************************************************************************************************************//
Create dummy data using tinker
    1>php artisan tinker
    >>> factory('App\User', 100)->create()
        or
    >>> factory('App\Customer', 100)->create()

//Tinker cmd
    1>php artisan tinker 
    $customer = App\Customer::find(9);    
    $customer->delete();