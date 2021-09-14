<form action="{{route('product.store')}}" method="POST" class="mb-3">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" required placeholder="Product Name" name="product_name"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Price</span>
        <input type="number" step="0.001" class="form-control" required placeholder="Product Price" name="product_price"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Unit</label>
        <select class="form-select" id="inputGroupSelect01" name="product_unit" required>
            <option selected disabled value="">Choose Unit</option>
            @foreach (product_unit() as $item)
            <option value="{{$item}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Discount</span>
        <input type="text" class="form-control" required placeholder="Product Discount" name="product_discount"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Category</label>
        <select class="form-select" id="inputGroupSelect01" name="product_category_id" required>
            <option selected disabled value="">Choose Category</option>
            @foreach ($product_category_data as $item)
            <option value="{{$item->id}}">{{$item->product_category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-check">
      <label class="form-check-label ">
        <input type="checkbox" class="form-check-input" name="product_status" id="product_status" value="1" checked>
        Active
      </label>
    </div>
    <div class="modal-footer">
        <div class="mt-3 ">
            <button type="submit" class="btn btn-primary ">Save</button>
        </div>
    </div>
</form>
