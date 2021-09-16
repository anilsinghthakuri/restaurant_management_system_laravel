<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerLedgerController extends Controller
{

    public function index()
    {
        return view('customer.customer_ledger.index');
    }

}
