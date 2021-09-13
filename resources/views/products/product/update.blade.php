<form action="{{route('product.update',$product)}}" method="POST" class="mb-3">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Product Name</span>
                <input type="text" class="form-control" required placeholder="Category Name" name="product_name"
                    aria-label="Username" aria-describedby="basic-addon1" value="{{$product->product_name}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Product Price</span>
                <input type="number" class="form-control" required placeholder="Product Price" name="product_price"
                    aria-label="Username" aria-describedby="basic-addon1" value="{{$product->product_price}}">
            </div>
            <div class="form-group">
              <label for="product_category">Porduct Category</label>
              <select class="form-control" name="product_category" id="product_category">
                <option>choose product Category</option>
              </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Product Unit</span>
                <input type="text" class="form-control" required placeholder="Product Unit" name="product_unit"
                    aria-label="Username" aria-describedby="basic-addon1" disabled value="{{$product->product_unit}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Discount</span>
                <input type="text" class="form-control" required placeholder="Product Discount" name="product_discount"
                    aria-label="Username" aria-describedby="basic-addon1" value="{{$product->product_discount}}">
            </div>
        </div>
    </div>

    {{-- @error('product_category_name')
    <small id="helpId" class="form-text text-muted">{{$message}}</small>
    @enderror --}}
    <div >
        <button type="submit" class="btn btn-primary float-right">Update</button>
        <a href="{{route('product.index')}}"><button class="btn btn-danger">Cancel</button></a>
    </div>
</form>
