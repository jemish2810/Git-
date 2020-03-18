<?php

namespace App\Http\Controllers;
use DB;
use App\Customer;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Customer as GlobalCustomer;

class Customercontroller extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $cust = DB::table('customers')->select('*');
            return datatables()->of($cust)
                ->addColumn('action', 'action_button')
                ->rawColumns(['action'])
                ->make(true);
        }

        
        return view('customer');
    }
//cerate customer   
    public function create()
    {
        return view('customer_store');
    }
//store record
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->get('name');
        $customer->email = $request->get('email');
        $customer->phone_number = $request->get('phone_number');
        $customer->save();
        return view('customer');    
    }

// delete cust
    public function delete($id )
    {
        // Mail::to('jemish@logisticinfotech.co.in')->send(new SendMail($id));
        $cust = Customer::destroy($id);
        // return response()->json(['success' =>  'Customer_id (' . $id . ') deleted successfully.']);
        return redirect('/customer');
        
    }

    public function edit($id)
    {
        $cust = Customer::find($id);
        return view('update',compact('cust'));
    }


public function update(Request $request, $id)
    {

        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required|integer',
            'phone_number' => 'required|integer'
         ]);
 
      $cust = Customer::find($id);
      $cust->name = $request->get('name');
      $cust->email = $request->get('email');
      $cust->phone_number = $request->get('phone_number');
      $cust->save();
      return redirect('/customer')->with('success', 'Employee has been updated Successfully.');
    }
}