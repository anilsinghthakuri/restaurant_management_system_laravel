<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerReceipt;
use Illuminate\Http\Request;

class CustomerReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_data = $this->fetch_customer_details();
        return view('customer.customer_receipt.index',[
            'customer_data'=>$customer_data,
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

        CustomerReceipt::create($request->except('_token'));
        return redirect()->back()->with('message','Receipt Amount Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerReceipt  $customerReceipt
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerReceipt $customerReceipt)
    {
        dd($customerReceipt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerReceipt  $customerReceipt
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerReceipt $customerReceipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerReceipt  $customerReceipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerReceipt $customerReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerReceipt  $customerReceipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerReceipt $customerReceipt)
    {
        //
    }


    //for fetch all customer data to show details

    private function fetch_customer_details()
    {
        $customer_data = Customer::all();
        return $customer_data;
    }

    //for showing data of customer
    public function show_details_for_receipt_entry( $customer_id)
    {
        $single_customer_data = $this->fetch_single_customer_data($customer_id);
        // dd($single_customer_data);
        return view('customer.customer_receipt.show',[
            'single_customer_data'=>$single_customer_data,
        ]);
    }

    //for fetch single customer data
    private function fetch_single_customer_data($customer_id)
    {
        $single_customer_data = Customer::findorFail($customer_id);
        return $single_customer_data;
    }
}
