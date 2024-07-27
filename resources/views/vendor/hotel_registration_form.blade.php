@extends('admin_master')
@section('hotel_reg_form')


<link rel="stylesheet" href="{{ url('assets/css/ms_form.css')}}">

<!-- MultiStep Form -->
<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-md-6">
            <form id="msform" action="{{url('/hotel_registration')}}" method="POST">
                @csrf
                <!-- progressbar -->
                <div>
                    <h4>Register Hotel</h4>
                </div>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Hotel Name</h2>
                    <h3 class="fs-subtitle">Write the hotel name</h3>
                    <input type="text" name="hotel_name" placeholder="Hotel Name" required />
                    <h3 class="fs-subtitle">Write the hotel name</h3>
                    <input type="button" name="next" class="next action-button" value="Next" id="next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Complete Address</h2>
                    <h3 class="fs-subtitle">Write the complete address of your hotel</h3>
                    <input type="text" name="hotel_address" placeholder="Address" required />
                    <input type="text" name="hotel_city" placeholder="City" required />
                    <input type="text" name="hotel_state" placeholder="State" required />
                    <input type="text" name="hotel_country" placeholder="Country" required />
                    <input type="text" name="hotel_phone" placeholder="Phone Number" required />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Description</h2>
                    <label for="freeform" class="fs-subtitle">Write a brief description of the hotel</label>
                    <textarea name="hotel_description" rows="4" cols="50" placeholder="write here...">
                    </textarea>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Hotel Rating</h2>
                    <h3 class="fs-subtitle">Please give Star Rating of your hotel</h3>
                    <div class="rating">
                        <input type="radio" name="hotel_rating" value="5" id="5">
                        <label for="5">☆</label>
                        <input type="radio" name="hotel_rating" value="4" id="4">
                        <label for="4">☆</label>
                        <input type="radio" name="hotel_rating" value="3" id="3">
                        <label for="3">☆</label>
                        <input type="radio" name="hotel_rating" value="2" id="2">
                        <label for="2">☆</label>
                        <input type="radio" name="hotel_rating" value="1" id="1">
                        <label for="1">☆</label>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="submit" name="submit" class="next action-button" value="Submit" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ url('assets/js/ms_form.js')}}"></script>

@endsection