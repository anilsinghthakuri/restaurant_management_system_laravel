<form action="{{route('product.update',$product)}}" method="POST" class="mb-3">
    @csrf
    @method('PUT')
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" required placeholder="Product Name" name="product_name"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$product->product_name}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Price</span>
        <input type="number" step="0.001" class="form-control" required placeholder="Product Price" name="product_price"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$product->product_price}}">
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Unit</label>
        <select class="form-select" id="inputGroupSelect01" name="product_unit" required>
            <option  disabled value="">Choose Unit</option>
            @foreach (product_unit() as $item)
            <option @if ($item == $product->product_unit)
                selected
            @endif value="{{$item}}">{{$item}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Discount</span>
        <input type="text" class="form-control" required placeholder="Product Discount" name="product_discount"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$product->product_discount}}">
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Category</label>
        <select class="form-select" id="inputGroupSelect01" name="product_category_id" required>
            <option  disabled value="">Choose Category</option>
            @foreach ($product_category_data as $item)
            <option @if ($item->id == $product->product_category_id)
                selected
            @endif value="{{$item->id}}">{{$item->product_category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-check">
      <label class="form-check-label ">
        <input type="checkbox" class="form-check-input" name="product_status" id="product_status" value="1" @if ($product->product_status == 1)
            checked
        @endif>
        Active
      </label>
    </div>
    <div class="modal-footer">
        <div class="mt-3 ">
            <button type="submit" class="btn btn-primary ">Update</button>
            <a href="{{route('product.index')}}"><button type="button"  class="btn btn-danger ">Cancel</button></a>
        </div>
    </div>
</form>
