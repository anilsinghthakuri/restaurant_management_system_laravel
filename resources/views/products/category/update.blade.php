<form action="{{route('product-category.update',$productCategory)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group  mb-3">
        <span class="input-group-text" id="basic-addon1">Category Name</span>
        <input type="text" class="form-control" required value="{{$productCategory->product_category_name}}" name="product_category_name"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('product-category.index')}}"><button class="btn btn-danger">Cancel</button></a>
</form>
