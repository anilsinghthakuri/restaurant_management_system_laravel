<form action="{{route('product-category.store')}}" method="POST"  class="mb-3">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Category Name</span>
        <input type="text" class="form-control" required placeholder="Category Name" name="product_category_name"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    {{-- @error('product_category_name')
    <small id="helpId" class="form-text text-muted">{{$message}}</small>
    @enderror --}}
    <button type="submit" class="btn btn-primary">Add</button>
</form>
