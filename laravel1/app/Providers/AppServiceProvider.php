<?php

namespace App\Providers;

use App\Customer;
use App\Mail\SendMail;
use App\Observers\CustomerObserver;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Customer::observe(CustomerObserver::class);
        
        // \App\Customer::deleting(function ($model) {
        //     $id = $model->id ;
        //     Mail::to('jemish@logisticinfotech.co.in')->send(new SendMail($id));
        // });
        // \App\Customer::creating(function ($model) {
        //     $id  = $model->id;
        //     $model->name = strtoupper($model->name);
        //     Mail::to('jemish@logisticinfotech.co.in')->send(new SendMail($id));
        // });
    }
}
