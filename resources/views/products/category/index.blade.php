@extends('layouts.master')




@section('components')

<div class="col-md-12 body-class ">
    <div class="row">
        <div class="col-md-12 mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal" data-bs-target="#productcategory">
                Add Product Category
            </button>
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
                                        <form action="{{route('product-category.destroy',$item->product_category_id)}}"
                                            method="POST">
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

<!-- Modal for product category -->
<div class="modal fade" id="productcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Category </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            @if ($updatemode == false)
            <div class="modal-body">
                <form action="{{route('product-category.store')}}" method="POST" class="mb-3">
                    @include('products.category.create')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
            @else
            <div class="modal-body">
                @include('products.category.update')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            @endif


        </div>
    </div>
</div>

@endsection

@push('script')
    <script type="text/javascript">
        @error ('product_category_name')
            $('#productcategory').modal('show');
        @enderror
        </script>
@endpush
