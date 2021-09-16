@extends('layouts.master')

@section('components')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4>Credit Customer Info</h4>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" ">Name</span>
                                    <input type=" text" class="form-control" name="customer_name" aria-label="Username"
                                        aria-describedby="basic-addon1" disabled
                                        value="{{$single_customer_data->customer_name}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" ">Mobile</span>
                                    <input type=" number" class="form-control" name="customer_mobile"
                                        aria-label="Username" aria-describedby="basic-addon1" disabled
                                        value="{{$single_customer_data->customer_mobile}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" ">Address</span>
                                    <input type=" text" class="form-control" name="customer_address"
                                        aria-label="Username" aria-describedby="basic-addon1" disabled
                                        value="{{$single_customer_data->customer_address}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" ">Bank Name</span>
                                    <input type=" text" class="form-control" name="customer_bank" aria-label="Username"
                                        aria-describedby="basic-addon1" disabled
                                        value="{{$single_customer_data->customer_bank}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" ">Account Number</span>
                                    <input type=" text" class="form-control" name="customer_bank_account_number"
                                        aria-label="Username" aria-describedby="basic-addon1" disabled
                                        value="{{$single_customer_data->customer_account_number}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" ">Balance</span>
                                    <input type=" text" class="form-control text-danger"
                                        name="customer_bank_account_number" aria-label="Username"
                                        aria-describedby="basic-addon1" disabled value="0   ">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="customer_desc" id="" rows="3"
                                        disabled>{{$single_customer_data->customer_desc}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="col-md-12 body-class ">
                <div class="row">
                    <div class="col-md-12 mt-3">
                           <span> <h4>Transaction Info</h4></span>

                        <div class="row mt-5">
                            <div class="col-md-12">
                                @include('customer.customer_receipt.transaction_info')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




@endsection

@push('script')

<script>
    $(document).ready(function () {

        function form_submit_confirm() {
            var x = confirm('Are you sure?');
            if (x == true) {
                $('#form1').submit();
            }
            // else {
            //     alert('not save');
            // }
        }

        $(#submit_button).click(function () {
            alert('ss');
            form_submit_confirm();
        })

    });

</script>

@endpush
