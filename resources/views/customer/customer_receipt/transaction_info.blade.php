<form action="{{route('customer-receipt.store')}}" method="POST" id="form" >
    @csrf
    <input type="hidden" name="customer_id" value="{{$single_customer_data->id}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="form-group mt-2">
                    <label for="tarnsaction_no">Transaction No</label>
                    <input type="text" class="form-control" name="tarnsaction_no" id="tarnsaction_no"
                        aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group mt-2">
                    <label for="receipt_date">Transaction Date</label>
                    <input type="text" class="form-control date-picker" name="receipt_date" data-single="true" id="receipt_date"
                         required  value="{{nepali_now_date()}}" >
                </div>

            </div>
            <div class="col-lg-5">

                <div class="form-group mt-2">
                    <label for="receipt_payment_mode">Payment Mode</label>
                    <select class="form-control" name="receipt_payment_mode" id="receipt_payment_mode" required>
                        <option selected disabled value="">Choose Method</option>
                        @foreach (mode_of_payment() as $item)
                            <option >{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="paid_amount">Amount</label>
                    <input type="number" class="form-control" name="paid_amount" id="" aria-describedby="helpId"
                        placeholder="" required>
                </div>
            </div>

            <div class="form-group mt-2">
                <label for="">Payment Mode Details : (Transaction ID/ Cheque No.)</label>
                <textarea class="form-control" name="receipt_desc" id="" rows="3"></textarea>
            </div>

            <div class="modal-footer">
                <div class="mt-3 ">
                    <button type="submit" class="btn btn-primary "  id="submit_button">Save</button>
                </div>
            </div>
        </div>
    </div>

</form>

