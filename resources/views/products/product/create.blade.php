<form action="{{route('product.store')}}" method="POST" class="mb-3">
    @csrf
    <div class="row">

        <div class="col-lg-6">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Product Name</span>
                <input type="text" class="form-control" required placeholder="Category Name" name="product_name"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Product Price</span>
                <input type="number" class="form-control" required placeholder="Product Price" name="product_price"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>

        </div>
        <div class="col-lg-6">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Product Unit</span>
                <input type="text" class="form-control" required placeholder="Product Unit" name="product_unit"
                    aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Discount</span>
                <input type="text" class="form-control" required placeholder="Product Discount" name="product_discount"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="form-group">
        <span class="input-group-text" id="basic-addon1">Product Category</span>
        <select class="form-control" name="product_category" id="product_category" aria-label="Username"
            aria-describedby="basic-addon1">
            <option selected disabled>choose product Category</option>
            @foreach ($product_category_data as $item)
            <option value="{{$item->product_category_id}}">{{$item->product_category_name}}</option>
            @endforeach
        </select>
    </div>

    {{-- @error('product_category_name')
    <small id="helpId" class="form-text text-muted">{{$message}}</small>
    @enderror --}}
    <div class="mt-2">
        <button type="submit" class="btn btn-primary float-right">Add</button>
    </div>
</form>
