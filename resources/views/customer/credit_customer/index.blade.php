@extends('layouts.master')

@section('components')

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($updatemode == false)
                                <h4>Add Customer</h4>
                                @include('customer.credit_customer.create')
                                @else
                                <h4>Edit Customer</h4>
                                @include('customer.credit_customer.update')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4>Customer List</h4>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="table__list__part ">
                                    <div class="table-responsive">
                                        <table class="table table-bordered bg-light" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.N</th>
                                                    <th scope="col"> Name</th>
                                                    <th scope="col"> Mobile</th>
                                                    <th scope="col"> Address</th>
                                                    <th scope="col"> Desc</th>
                                                    <th scope="col"> Bank</th>
                                                    <th scope="col"> Bank Number</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customer_data as $item)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{$item->customer_name}}</td>
                                                    <td>{{$item->customer_mobile}}</td>
                                                    <td>{{$item->customer_address}}</td>
                                                    <td>{{$item->customer_desc}}</td>
                                                    <td>{{$item->customer_bank}}</td>
                                                    <td>{{$item->customer_account_number}}</td>
                                                    <form action="{{route('customer.destroy',$item->id)}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <td class="d-flex">
                                                            <a href="{{route('customer.edit',$item->id)}}"><button
                                                                    type="button" class="btn btn-primary action-btn"><i
                                                                        class="fas fa-edit"></i></button></a>
                                                            <button type="submit" class="btn btn-danger action-btn"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </td>
                                                    </form>
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

    </div>
</div>




@endsection
