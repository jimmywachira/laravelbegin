<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }  

    public function create(){
        return view('customer.create');
    }

    public function store(){
        $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required | email'
        ]);

        Customer::create($data);
        return redirect('/customers');
    }

    public function show($customerId){
         $customer = Customer::findOrFail($customerId);
         return view('customer.show');
    }
}
