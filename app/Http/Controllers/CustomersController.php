<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $customer = new Customer();
        return view('customers.create', compact('customer'));
    }

    public function store()
    {        
        Customer::create($this->validateRequest());

        return redirect('customers');
    }

    public function show($customer)
    {
        $customer = Customer::where('id', $customer)->firstOrFail();

        return view('customers.show', compact('customer'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
        ]);   
    }
}
