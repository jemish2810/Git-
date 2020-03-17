<?php

namespace App\Http\Controllers;
use DB;
use App\Customer;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
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
        $user = Customer::where('id',$id)->delete();
        return response()->json(['success' => 'Customer_id ('.$id.') deleted successfully.']);
    }
}
