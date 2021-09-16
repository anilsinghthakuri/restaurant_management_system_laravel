@extends('layouts.master')

@section('components')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4> Search Credit Customer Info</h4>
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <table class="table  table-bordered table-hover " id="datatable">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customer_data as $item)
                                        <tr>

                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$item->customer_name}}</td>
                                            <td>{{$item->customer_mobile}}</td>
                                            <td>  <a href="{{route('customer-detail-receipt-entry.show_details_for_receipt_entry',$item->id)}}"><button class="btn btn-info"><i
                                                        class="fas fa-eye" aria-hidden="true"></i></button> </a></td>
                                        </tr>

                                        @endforeach

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
