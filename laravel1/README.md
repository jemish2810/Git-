
<p><strong>Install all the dependencies using composer</strong>
    <b>composer install</b><br/>
    1> composer global require laravel/installer</p>

<p><h2>Create-project</h2><br/>
	1> composer create-project --prefer-dist laravel/laravel <project_name></p> 

<p><h2>Make model</h2></p>
    1> php artisan make:model User -mc
    2> php artisan make:model Customer -mc

<p><h2>Make controller
	1> php artisan make:controller UserController
    2> php artisan make:controller Customercontroller

<p><h2>Configure .env file 
    change datavse,username,password

<p><h2>Copy the example env file and make the required configuration changes in the .env file
    cp .env.example .env

<p><h2>Run the database migrations (Set the database connection in .env before migrating)
    php artisan migrate

<p><h2>You can refresh your migrations at any point to clean the database by running the following command
    php artisan migrate:refresh

<p><h2>Create controller and DataTable class
    1>php artisan make:controller UsersController
    2>php artisan datatables:make Users
    
<p><h2>Make seed
    1> php artisan make:seeder UsersTableSeeder
    2> php artisan make:seeder CustomersTableSeeder

<p><h2>Seed data 
    1> php artisan db:seed 
                or
    2> php artisan db:seed --class={Tableseeder name}

<p><h2>Make Auth and Configure routes/web.php file 
    1> php artisan make:auth
    //composer require laravel/ui
    //php artisan ui vue --auth


<p><h2>Generate Realtime data / facke data (plugin)
    Refferlink:: <a href="https://kode-blog.io/laravel-5-faker-tutorial">laravel-faker-tutorial</a> 
                <a href="https://scotch.io/tutorials/generate-dummy-laravel-data-with-model-factories">laravel-data-with-model-factories(faker)</a>

	1> composer require fzaninotto/faker --dev
	2> php artisan db:seed	or 
       php artisan db:seed --class=CustomersTableSeeder

//**************************************************************************************************************************************//

<p><h2>Datatable plugin (Yajra)</h2>

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
<p><h2>(optional cmd)</h2>
    php artisan config:cache
    php artisan config:clear
    php artisan cache:clear
    composer dump-autoload

Project Serve <br/>
    php artisan serve<br/>

//**************************************************************************************************************************************//

<p><h2>Defining Observers<h2><br/>
    1>php artisan make:observer UserObserver --model=User</p><br/>

<p><h2>Make model<h2><br/>
    1> php artisan make:model Customer -mc</p><br/>

<p><h2>Make provider<h2>
    1> php artisan make:provider CustomerServiceProvider</p><br/><br/>

        
register observer class into AppServiceProvider (boot method)<br/>


//**************************************************************************************************************************************//
<p><h2>Create dummy data using tinker<h2><br/>
    1>php artisan tinker<br/>
    >>> factory('App\User', 100)->create()<br/>
        or<br/>
    >>> factory('App\Customer', 100)->create()<br/>

<p><h2>//Tinker cmd<h2><br/>
    1>php artisan tinker <br/>
    $customer = App\Customer::find(9);<br/>
    $customer->delete();<br/>