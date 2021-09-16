@extends('layouts.master')

@section('components')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-12 body-class ">
                <div class="row">
                <div class="mt-3">
                    <h5>Search by Customer Name and Date</h5>
                    </div>
                    <div class="col-md-12 mt-3">
                        <form action="#" method="get">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="customer_id">Choose Customer</label>
                                                <select class="form-control customer" name="customer_id" id="customer_id">
                                                    <option>Choose Customer</option>
                                                    <option>hari lal </option>
                                                    <option>Madan parshad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="from_date">From</label>
                                                <input type="text" class="form-control date-picker" data-single="true"
                                                    name="from_date" id="from_date" required
                                                    value="{{nepali_now_date()}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="to_date">To</label>
                                                <input type="text" class="form-control date-picker" data-single="true"
                                                    name="to_date" id="to_date" required value="{{nepali_now_date()}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-footer">
                                        <div class="mt-3 ">
                                            <button type="submit" class="btn btn-primary "><i class="fas fa-search"></i> View Report</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection


