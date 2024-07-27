@extends('admin_master')
@section('hotel_reg_form')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Book a Room</h5>
    </div>
    <div class="card-body col-sm-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="msform" action="{{ route('register_room', $hotel) }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" id="hotel_id" name="hotel_id" value="{{$hotel->id}}">
            </div>
            <div class="form-group ">
                <label for="room_type">Room Type:</label>
                <select id="room_type" name="room_type" class="form-control" required>
                    <option value="">Select Room Type</option>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="suite">Suite</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            <div class="form-group">
                <label for="num_rooms">Number of Rooms:</label>
                <input type="number" id="num_rooms" name="number_of_rooms" class="form-control" min="1" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection