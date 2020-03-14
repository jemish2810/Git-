<?php

namespace App\Http\Controllers;
use DB;
use App\Customer;
use DataTables;
use Illuminate\Http\Request;

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
    
// delete cust
    public function delete($id)
    {
        $user = Customer::where('id',$id)->delete();
        return response()->json(['success' => 'Customer deleted successfully.']);
    }
}
