@extends('layouts.master')

@section('components')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="row">

                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col text-center">
                                            <h4>Credit Customer Ledger</h4>
                                            <h6>(From {{$from_date_in_bs}} To {{$to_date_in_bs}})</h6>
                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6>Customer Name: {{$customer_data->customer_name}}</h6>
                                                        <h6>Customer No.: {{$customer_data->id}}</h6>
                                                    </div>
                                                    <div class="col-lg-6 text-end">
                                                        <h6>Date: {{nepali_now_date()}}</h6>
                                                        <h6>Time: {{now_time()}}</h6>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <table class="table table-bordered" >
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Invoice No.</th>
                                            <th>Description</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customer_ledger_data as $item)
                                            <tr>
                                                <td scope="row">{{$item->created_at}}</td>
                                                <td>{{$item->id}}</td>
                                                <td>Payment</td>
                                                <td>{{$item->paid_amount}}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                        <tr>

                                            <td colspan="3" class="text-end">Current Balance</td>
                                            <td>100000</td>
                                            <td>20000</td>
                                        </tr>
                                        <tr>

                                            <td colspan="3" class="text-end">Closing Balance</td>
                                            <td colspan="2">1000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
