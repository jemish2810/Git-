
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

Create migration
    1>php artisan make:migration create_users_table  
    php artisan migrate

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
    Refferlink:: 
                https://kode-blog.io/laravel-5-faker-tutorial ::LINK::laravel-faker-tutorial 
                https://scotch.io/tutorials/generate-dummy-laravel-data-with-model-factories::LINK::2>laravel-data-with-model-factories(faker)
	1> composer require fzaninotto/faker --dev</br>
	2> php artisan db:seed	or 
       php artisan db:seed --class=CustomersTableSeeder

//**************************************************************************************************************************************//

Datatable plugin (Yajra)

<h4>Install Yajra Datatable Package</h4>
    RefferLink :: https://www.itsolutionstuff.com/post/laravel-58-datatables-tutorialexample.html ::LINK::(yajra)
	1> composer require yajra/laravel-datatables-oracle

<h2>Note:Register provider and facade on your config/app.php file.

    'providers' => [
        ...,
        Yajra\DataTables\DataTablesServiceProvider::class,
    ]

    'aliases' => [
        ...,
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,
    ]

<h3>Create controller and DataTable class</h3>
    1>php artisan make:controller Customercontroller
    2>php artisan datatables:make customerTable


//**************************************************************************************************************************************//
(optional cmd)
    php artisan config:cache
    php artisan config:clear
    php artisan cache:clear
    composer dump-autoload
    clear
<h3>Project Serve</h3> 
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
   
   ``` 
     >>>factory('App\User', 100)->create()
        or
     >>> factory('App\Customer', 100)->create()   
 ```   


Tinker cmd
    1>php artisan tinker 
    $customer = App\Customer::find(9);
    $customer->delete();

//**************************************************************************************************************************************//

Queue job
    php artisan queue:table
    php artisan migrate
    1>php artisan make:job SendEmailTest 
    2>php artisan make:job WelcomeEmail  
    <h4>Timeout queue</h4>
    php artisan queue:listen
    php artisan queue:restart
    php artisan queue:work --timeout=60
    <h4>To retry all of your failed jobs, execute the queue:retry command and pass all as the ID:</h4>
    php artisan queue:retry all
    <h4>To delete all of your failed jobs, you may use the queue:flush command:</h4>
    php artisan queue:flush


//**************************************************************************************************************************************//
Validation on create or update form

https://appdividend.com/2019/03/09/laravel-5-8-form-validation-tutorial-with-example/::LINK::Reffer link 1 
https://www.w3adda.com/blog/laravel-5-8-form-validation-tutorial-example::LINK::Reffer link 2 
https://laravel.com/docs/7.x/validation#introduction::LINK::Reffer link 3 
https://vegibit.com/how-to-validate-form-submissions-in-laravel/::LINK::Reffer link 4 
    1>make controller 
    2>make model
    3>migreate table
    4>create/edit blade file
    5>Creating Form Requests
        php artisan make:request Validate_Customer
//**************************************************************************************************************************************//
Form binding create/update form

https://laravelcollective.com/docs/5.1/html#installation::LINK::Reffer link 1 
https://blog.tekmi.nl/is-it-beneficial-to-add-laravel-collective-html-package-into-your-laravel-project::LINK::Reffer link 2 
https://www.sitepoint.com/crud-create-read-update-delete-laravel-app/::LINK::Reffer link 3 
https://github.com/LaravelCollective/docs/blob/5.6/html.md::LINK::Reffer link 4 



//**************************************************************************************************************************************//
Getter / Setter method ( accessor / mutator )

https://github.com/laravel/framework/issues/7398::LINK::Reffer link 1 
https://medium.com/@bvipul/laravel-accessors-and-mutators-learn-how-to-use-them-29a1e843ce85::LINK::Reffer link 2 
https://laravel.com/docs/5.7/eloquent-mutators#accessors-and-mutators::LINK::Reffer link 3 
http://www.expertphp.in/article/laravel-use-of-accessors-and-mutators-to-format-eloquent-attributes::LINK::Reffer link 4 

