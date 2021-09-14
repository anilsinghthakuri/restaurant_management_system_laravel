<form action="{{route('customer.update',$customer)}}" method="POST" class="mb-3">
    @csrf
    @method('PUT')
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" required placeholder="Customer Name" name="customer_name"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$customer->customer_name}}" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Mobile</span>
        <input type="number"  class="form-control" required placeholder="Customer Mobile" name="customer_mobile"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$customer->customer_mobile}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Address</span>
        <input type="text" class="form-control"  placeholder="Address" name="customer_address"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$customer->customer_address}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Bank Name</span>
        <input type="text" class="form-control"  placeholder="Bank Name" name="customer_bank"
            aria-label="Username" aria-describedby="basic-addon1" value="{{$customer->customer_bank}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Account Number</span>
        <input type="text" class="form-control"  placeholder="Bank Account Number" name="customer_bank_account_number"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
   <div class="form-group">
     <label for="">Description</label>
     <textarea class="form-control" name="customer_desc" id="" rows="3">{{$customer->customer_desc}}</textarea>
   </div>
    <div class="form-check">
      <label class="form-check-label ">
        <input type="checkbox" class="form-check-input" name="customer_status" id="product_status" value="1" @if ($customer->customer_status == 1)
                checked
        @endif>
        Active
      </label>
    </div>
    <div class="modal-footer">
        <div class="mt-3 ">
            <button type="submit" class="btn btn-primary ">Update</button>
            <a href="{{route('customer.index')}}"><button type="button" class="btn btn-danger ">Cancel</button></a>
        </div>
    </div>
</form>
