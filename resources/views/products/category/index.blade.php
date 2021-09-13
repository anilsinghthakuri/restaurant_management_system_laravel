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
                    <div class="add__table__list">
                        @if ($updatemode == false)
                        @include('products.category.create')
                        @else
                        @include('products.category.update')
                        @endif

                    </div>
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
                                        <th scope="col"> Product Category Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product_category_data as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->product_category_name}}</td>
                                        <form action="{{route('product-category.destroy',$item->product_category_id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td class="d-flex">
                                                <a href="{{route('product-category.edit',$item->product_category_id)}}"><button
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
