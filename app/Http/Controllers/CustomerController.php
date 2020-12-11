<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function add(){
        return view('customer.customer');
    }
    public function insert(Request $request){
        $customer=new Customer([
            "name"=>$request->get('name'),
            "email"=>$request->get('email'),
            "password"=>$request->get('password')
        ]);
        $customer->save();
        return redirect('/customers/customerlist');
    }
    public function list(){
        $customers=Customer::all();
        return view('customer.customerlist',compact('customers'));
    }
    public function detail($id){
        $customer=Customer::find($id);
        return view('customer.customerdetail',compact('customer'));
    }
    public function modify($id){
        $customer=Customer::find($id);
        return view('customer.customerupdate',compact('customer'));
    }
    public function update(Request $request){
        $customer=[
            "name"=>$request->get('name'),
            "email"=>$request->get('email'),
            "password"=>$request->get('password')
        ];
        Customer::find($request->get('id'))->update($customer);
        return redirect('/customers/customerlist');
    }
    public function delete($id){
        Customer::find($id)->delete();
        return redirect('/customers/customerlist');
    }
}
