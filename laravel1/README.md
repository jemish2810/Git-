
<p><strong>Install all the dependencies using composer</strong>
    <b>composer install</b><br/>
    1> composer global require laravel/installer</p>

<p><h2>Create-project</h2><br/>
	1> composer create-project --prefer-dist laravel/laravel <project_name></p> 

<p><h2>Make model</h2><br/></p>
    1> php artisan make:model User -mc<br/>
    2> php artisan make:model Customer -mc<br/></p>

<p><h2>Make controller</h2><br/>
	1> php artisan make:controller UserController<br/>
    2> php artisan make:controller Customercontroller<br/></p>

<p><h2>Configure .env file </h2><br/>
    change datavse,username,password<br/></p>

<p><h2>Copy the example env file and make the required configuration changes in the .env file</h2><br/>
    cp .env.example .env<br/></p>

<p><h2>Run the database migrations (Set the database connection in .env before migrating)</h2><br/>
    php artisan migrate<br/></p>

<p><h2>You can refresh your migrations at any point to clean the database by running the following command</h2>
    php artisan migrate:refresh<br/></p>

<p><h2>Create controller and DataTable class</h2><br/>
    1>php artisan make:controller UsersController<br/>
    2>php artisan datatables:make Users<br/></p>
    
<p><h2>Make seed</h2><br/>
    1> php artisan make:seeder UsersTableSeeder<br/>
    2> php artisan make:seeder CustomersTableSeeder<br/></p>

<p><h2>Seed data </h2><br/>
    1> php artisan db:seed <br/>
                or<br/>
    2> php artisan db:seed --class={Tableseeder name}<br/></p>

<p><h2>Make Auth and Configure routes/web.php file </h2>
    1> php artisan make:auth<br/>
    //composer require laravel/ui<br/>
    //php artisan ui vue --auth<br/></p>


<p><h2>Generate Realtime data / facke data (plugin)</h2><br/>
    Refferlink::</br> 
                <a href="https://kode-blog.io/laravel-5-faker-tutorial">1 >laravel-faker-tutorial</a> <br/>
                <a href="https://scotch.io/tutorials/generate-dummy-laravel-data-with-model-factories">2>laravel-data-with-model-factories(faker)</a><br/>
	1> composer require fzaninotto/faker --dev</br>
	2> php artisan db:seed	or <br/>
       php artisan db:seed --class=CustomersTableSeeder<br/></p>

//**************************************************************************************************************************************//

<p><h2>Datatable plugin (Yajra)</h2>

<h4>Install Yajra Datatable Package</h4><br/>
    RefferLink :: <a href="https://www.itsolutionstuff.com/post/laravel-58-datatables-tutorialexample.html ">(yajra)</a><br/>
	1> composer require yajra/laravel-datatables-oracle<br/>

<h2>Note:Register provider and facade on your config/app.php file.</h2>

    'providers' => [
        ...,
        Yajra\DataTables\DataTablesServiceProvider::class,
    ]

    'aliases' => [
        ...,
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,
    ]

<h3>Create controller and DataTable class</h3><br/>
    1>php artisan make:controller Customercontroller<br/>
    2>php artisan datatables:make customerTable<br/></p>


//**************************************************************************************************************************************//
<p><h2>(optional cmd)</h2>
    php artisan config:cache<br/>
    php artisan config:clear<br/>
    php artisan cache:clear<br/>
    composer dump-autoload<br/>

<h3>Project Serve</h3> <br/>
    php artisan serve<br/>

//**************************************************************************************************************************************//

<p><h2>Defining Observers</h2><br/>
    1>php artisan make:observer UserObserver --model=User</p><br/>

<p><h2>Make model</h2><br/>
    1> php artisan make:model Customer -mc</p><br/>

<p><h2>Make provider</h2>
    1> php artisan make:provider CustomerServiceProvider</p><br/><br/>

        
register observer class into AppServiceProvider (boot method)<br/>


//**************************************************************************************************************************************//
<p><h2>Create dummy data using tinker</h2><br/>
    
    1>php artisan tinker<br/>
    
    ``` 
     >>>factory('App\User', 100)->create()
        or<br/>
     >>> factory('App\Customer', 100)->create()
    
    ```
   <br/></p>

<p><h2>//Tinker cmd</h2><br/>
    1>php artisan tinker <br/>
    $customer = App\Customer::find(9);<br/>
    $customer->delete();<br/></p>
