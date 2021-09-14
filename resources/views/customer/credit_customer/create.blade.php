<form action="{{route('customer.store')}}" method="POST" class="mb-3">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" required placeholder="Customer Name" name="customer_name"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Mobile</span>
        <input type="number"  class="form-control" required placeholder="Customer Mobile" name="customer_mobile"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Address</span>
        <input type="text" class="form-control"  placeholder="Address" name="customer_address"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Bank Name</span>
        <input type="text" class="form-control"  placeholder="Bank Name" name="customer_bank"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Account Number</span>
        <input type="text" class="form-control"  placeholder="Bank Account Number" name="customer_bank_account_number"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
   <div class="form-group">
     <label for="">Description</label>
     <textarea class="form-control" name="customer_desc" id="" rows="3"></textarea>
   </div>
    <div class="form-check">
      <label class="form-check-label ">
        <input type="checkbox" class="form-check-input" name="customer_status" id="product_status" value="1" checked>
        Active
      </label>
    </div>
    <div class="modal-footer">
        <div class="mt-3 ">
            <button type="submit" class="btn btn-primary ">Save</button>
        </div>
    </div>
</form>
