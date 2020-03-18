<?php

namespace App\Observers;
use App\Jobs\SendEmailTest;
use App\Jobs\WelcomeEmail;
use App\Customer;
use App\Mail\SendMail;
use App\Mail\sendmailinvitation;
use App\Providers\CustomerServiceProvider;
use Illuminate\Support\Facades\Mail;

class CustomerObserver
{
    
    /**
     * Handle the customer "created" event.
     *
     * @param  \App\Customer  $customer
     * @
     * return void
     */
    
    public function created(Customer $customer)
    {
        WelcomeEmail::dispatch($customer->email); 
        // $id = $customer->id;
        // $email = $customer->email;
        // $customer->name = strtoupper($customer->name);
        //  Mail::to($customer)->send(new sendmailinvitation($id));
    }


    /**
     * Handle the customer "deleted" event.
     *
     * @param  \App\Customer  $customer
     * @return void
     */
    public function deleted(Customer $customer)
    {
        SendEmailTest::dispatch($customer->email); 
        // Mail::to('jemish.me@gmail.com')->send(new SendMail($id));
    }

    /**
     * Handle the customer "updated" event.
     *
     * @param  \App\Customer  $customer
     * @return void
     */
    public function updated(Customer $customer)
    {
        //
    }

    /**
     * Handle the customer "restored" event.
     *
     * @param  \App\Customer  $customer
     * @return void
     */
    public function restored(Customer $customer)
    {
        //
    }

    /**
     * Handle the customer "force deleted" event.
     *
     * @param  \App\Customer  $customer
     * @return void
     */
    public function forceDeleted(Customer $customer)
    {
        //
    }
  
}

