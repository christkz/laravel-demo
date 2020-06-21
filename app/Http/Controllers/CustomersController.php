<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index()
    {
        # code...
        $customers = Customer::all();
        return view('customers/index',[
         
         'customers'=> $customers
 
        ]);
    }
      public function create()
      {
          # code...
          return view('customers/create');
      }
 
      public function store(Request $request)
      {
          # code...
 
         $request->validate([
           'first_name'=>'required',
           'last_name'=>'required',
           'tel'=>'required',
           'email'=>'required',
           'address'=>'required',
       
         ]);
 
          $customer = new Customer();
          $customer ->first_name = $request->first_name;
          $customer ->last_name = $request->last_name;
          $customer ->tel = $request->tel;
          $customer ->email = $request->email;
          $customer ->address = $request->address;
          $customer->save();
          return redirect('customers');
      }
      //depandence 
      public function edit(Customer $customer)
      {
          # code...
          $customer= Customer::find($customer->id);
          return view('customers/edit', [
           'customer'=>$customer
          ]);
      }
      public function update(Request $request,Customer $customer)
      {
          # code...
          $customer->first_name = $request->first_name;
          $customer->last_name = $request->last_name;
          $customer->tel = $request->tel;
          $customer->email = $request->email;
          $customer->address = $request->address;
          $customer->save();
          return redirect('customers');
      }
      public function destroy(Customer $customer)
      {
          # code...
          $customer=Customer::find($customer->id);
          $customer->delete();
          return redirect('customers');
      }
  
}
