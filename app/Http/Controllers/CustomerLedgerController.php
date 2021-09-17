<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerReceipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerLedgerController extends Controller
{

    public function index()
    {
        $customer_data = $this->fetch_customer_data();
        return view('customer.customer_ledger.index',[
            'customer_data'=>$customer_data,
        ]);
    }


    public function show_customer_ledger_on_name_and_date(Request $request)
    {
        // dd($request->all());

        $from_date_in_bs = $request->from_date;
        $to_date_in_bs = $request->to_date;

        $customer_data = $this->fetch_single_customer_data($request->customer_id);
        $customer_ledger_data =  $this->fetch_customer_paynemts_details_and_credits($request);

        return view('customer.customer_ledger.show',[
            'customer_ledger_data'=>$customer_ledger_data,
            'customer_data'=>$customer_data,
            'from_date_in_bs'=>$from_date_in_bs,
            'to_date_in_bs'=>$to_date_in_bs,
        ]);
    }

    //for fetch customer data
    private function fetch_customer_data()
    {
        $customer_data =  Customer::all();
        return $customer_data;
    }

    private function fetch_customer_paynemts_details_and_credits($request_data)
    {
        // dd($request_data->all());

        //geting data from parameter request_date

        $customer_id = $request_data->customer_id;
        $from_date_in_bs = $request_data->from_date;
        $to_date_in_bs = $request_data->to_date;

        //changing date in creatde_at format

        $from_date_in_ad_with_time = change_date_bs_to_ad_and_add_timestamp_for_from_date($from_date_in_bs);

        $to_date_in_ad_with_time = change_date_bs_to_ad_and_add_timestamp_for_to_date($to_date_in_bs);


        //calling customer_receipt data form database


        $customer_ledger_data =  CustomerReceipt::where('customer_id',$customer_id)->whereBetween('created_at', [$from_date_in_ad_with_time, $to_date_in_ad_with_time])->get();

        return $customer_ledger_data;

    }

    //for fetch single customer data
    private function fetch_single_customer_data($customer_id)
    {
        $single_customer_data = Customer::findorFail($customer_id);
        return $single_customer_data;
    }
}
