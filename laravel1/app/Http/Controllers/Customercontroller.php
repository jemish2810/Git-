<?php

namespace App\Http\Controllers;

use DB;
use App\Customer;
use App\Http\Requests\Validate_Customer;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Customer as GlobalCustomer;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\DB as FacadesDB;
use Yajra\DataTables\Contracts\DataTable;

class Customercontroller extends Controller
{
    public function index(Request $request)
    {
        return view('customer');
    }

    public function getdata(Request $request){
       
        if($request["filter"]  != ''){
            return DataTables::eloquent(Customer::query()->where('gender', $request['filter']))->make(true);    
        }else{

            return DataTables::eloquent(Customer::query())->make(true);
        }
        // return DataTables::of(Customer::query())->make(true);
    }
    //cerate customer       
    public function create()
    {
        return view('customer_store');
    }
    //store record
    public function store(Validate_Customer $request)
    {
        $validatedData = $request->validated();
        \App\Customer::create($validatedData);
        
        return redirect('/customer');
        //old
        // // $customer = new Customer;
        // $customer->name = $request->name;
        // $customer->email = $request->email;
        // $customer->phone_number = $request->phone_number;
        // $customer->save();
        // return view('customer');    
    }

    // delete cust
    public function delete($id)
    {
        $cust = Customer::destroy($id);
        return redirect('/customer');
        //old
        // Mail::to('jemish@logisticinfotech.co.in')->send(new SendMail($id));
        // return response()->json(['success' =>  'Customer_id (' . $id . ') deleted successfully.']);

    }

    public function edit($id)
    {
        $cust = Customer::find($id);
        return view('update', compact('cust'));
    }


    public function update(Validate_Customer $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect('/customer');
    }
}
