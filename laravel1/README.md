
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

<p><h2>Create migration</h2><br/>
    1>php artisan make:migration create_users_table  <br/>
    php artisan migrate<br/></p>

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
    clear<br/>
<h3>Project Serve</h3> <br/>
    php artisan serve<br/>

//**************************************************************************************************************************************//

<p><h2>Defining Observers</h2><br/>
    1>php artisan make:observer UserObserver --model=User</p><br/>
https://scaffold.digital/the-power-of-laravels-observer-pattern/<br/>
https://subscription.packtpub.com/book/web_development/9781784391584/6/ch06lvl1sec43/an-example-of-model-observers
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

<p><h2>Tinker cmd</h2><br/>
    1>php artisan tinker <br/>
    $customer = App\Customer::find(9);<br/>
    $customer->delete();<br/></p>

//**************************************************************************************************************************************//

<p><h2>Queue job</h2><br/>
    php artisan queue:table<br/>
    php artisan migrate<br/>
    1>php artisan make:job SendEmailTest <br/>
    2>php artisan make:job WelcomeEmail <br/> <br/>
    <h4>Timeout queue</h4>
    php artisan queue:listen<br/>
    php artisan queue:restart<br/>
    php artisan queue:work --timeout=60<br/>
    <h4>To retry all of your failed jobs, execute the queue:retry command and pass all as the ID:</h4><br/>
    php artisan queue:retry all<br/>
    <h4>To delete all of your failed jobs, you may use the queue:flush command:</h4><br/>
    php artisan queue:flush<br/></p>


//**************************************************************************************************************************************//
<p><h2>Validation on create or update form</h2><br/>

<a href="https://appdividend.com/2019/03/09/laravel-5-8-form-validation-tutorial-with-example/">Reffer link 1</a> <br/>
<a href="https://www.w3adda.com/blog/laravel-5-8-form-validation-tutorial-example">Reffer link 2</a> <br/>
<a href="https://laravel.com/docs/7.x/validation#introduction">Reffer link 3</a> <br/>
<a href="https://vegibit.com/how-to-validate-form-submissions-in-laravel/">Reffer link 4</a> <br/>
    1>make controller 
    2>make model
    3>migreate table
    4>create/edit blade file
    5>Creating Form Requests
        php artisan make:request Validate_Customer</p>
//**************************************************************************************************************************************//
<p><h2>Form binding create/update form</h2><br/>

<a href="https://laravelcollective.com/docs/5.1/html#installation">Reffer link 1</a> <br/>
<a href="https://blog.tekmi.nl/is-it-beneficial-to-add-laravel-collective-html-package-into-your-laravel-project">Reffer link 2</a> <br/>
<a href="https://www.sitepoint.com/crud-create-read-update-delete-laravel-app/">Reffer link 3</a> <br/>
<a href="https://github.com/LaravelCollective/docs/blob/5.6/html.md">Reffer link 4</a> <br/>

</p>

//**************************************************************************************************************************************//
<p><h2>Getter / Setter method ( accessor / mutator )</h2><br/>

<a href="https://github.com/laravel/framework/issues/7398">Reffer link 1</a> <br/>
<a href="https://medium.com/@bvipul/laravel-accessors-and-mutators-learn-how-to-use-them-29a1e843ce85">Reffer link 2</a> <br/>
<a href="https://laravel.com/docs/5.7/eloquent-mutators#accessors-and-mutators">Reffer link 3</a> <br/>
<a href="http://www.expertphp.in/article/laravel-use-of-accessors-and-mutators-to-format-eloquent-attributes">Reffer link 4</a> <br/>

</p>
//**************************************************************************************************************************************//
<p><h2>larave mix </h2><br/>

<a href="https://www.codechief.org/article/laravel-mix-example-tutorial-the-complete-guide">Reffer link 1</a> <br/>
<a href="https://laravel.com/docs/7.x/mix#running-mix">Reffer link 2</a> <br/>

<a href="https://pusher.com/tutorials/getting-started-laravel-mix-frontend">Reffer link 3</a> <br/>
<a href="https://appdividend.com/2018/02/19/laravel-mix-compiling-assets-tutorial/">Reffer link 4</a> <br/>
https://www.sitepoint.com/use-laravel-mix-non-laravel-projects/</br>
https://www.sitepoint.com/use-laravel-mix-non-laravel-projects/</br>
https://mattstauffer.com/blog/introducing-laravel-mix-new-in-laravel-5-4/</br>

</p>
//**************************************************************************************************************************************//
<p><h2>crud profile image  </h2><br/>

<a href="https://www.webslesson.info/2019/03/step-by-step-crud-operation-in-laravel-58-with-file-upload.html">Reffer link 1</a> <br/>


</p>

//**************************************************************************************************************************************//
<p><h2>larave relationship </h2><br/>

<a href="https://vuejs.org/v2/guide/migration.html#v-el-and-v-ref-replaced">Reffer link 1</a> <br/>
<a href="https://blog.hashvel.com/posts/laravel-eloquent-relationships/">Reffer link 2</a> <br/>

<a href="https://programmingpot.com/laravel/laravel-eloquent-relationships/">Reffer link 3</a> <br/>
<a href="https://appdividend.com/2018/05/16/laravel-model-relationships-example/">Reffer link 4</a> <br/>
<a href="https://laravel.com/docs/7.x/eloquent-relationships">Reffer link 5</a> <br/>


</p>