<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $updatemode = false;
    public function index()
    {
        $customer_data = $this->fetch_customer_data();
        return view('customer.credit_customer.index',[
            'customer_data'=>$customer_data,
            'updatemode'=>$this->updatemode,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Customer::create($request->except('_token'));
        return redirect(route('customer.index'))->with('message','Customer Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $customer_data = $this->fetch_customer_data();
        $this->updatemode = true;
        return view('customer.credit_customer.index',[
            'customer_data'=>$customer_data,
            'customer'=>$customer,
            'updatemode'=>$this->updatemode,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        // dd($request->all());
        $customer->update($request->except('_token'));
        return redirect(route('customer.index'))->with('info','Customer Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customer.index'))->with('warning','Customer Deleted Successfully');


    }

    private function fetch_customer_data()
    {
        $customer_data = Customer::all();
        return $customer_data;
    }
}
