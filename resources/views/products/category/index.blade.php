@extends('layouts.master')




@section('components')

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="col-md-12 pt-3 body-class ">
                @if ($updatemode == false)
                <h4>Add Category</h4>
                @include('products.category.create')
                @else
                <h3>Edit Category</h3>
                @include('products.category.update')
                @endif
            </div>
        </div>

        <div class="col-lg-8">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4>Product Category List</h4>
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
                                                    <form action="{{route('product-category.destroy',$item->id)}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <td class="d-flex">
                                                            <a href="{{route('product-category.edit',$item->id)}}"><button
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
