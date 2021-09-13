@extends('layouts.master')

@section('components')

<div class="col-md-12 body-class ">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="add__table__title mb-4 mt-4">Product Category</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                        @if ($updatemode == false)
                        @include('products.product.create')
                        @else
                        @include('products.product.update')
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12 body-class ">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="table__list__part ">
                        <div class="table-responsive">
                            <table class="table table-bordered bg-light" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col"> Product Name</th>
                                        <th scope="col"> Product Price</th>
                                        <th scope="col"> Product Unit</th>
                                        <th scope="col"> Product Discount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product_data as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->product_name}}</td>
                                        <td>{{$item->product_price}}</td>
                                        <td>{{$item->product_unit}}</td>
                                        <td>{{$item->product_discount}}</td>
                                        <form action="{{route('product.destroy',$item->product_id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td class="d-flex">
                                                <a href="{{route('product.edit',$item->product_id)}}"><button
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
@endsection
