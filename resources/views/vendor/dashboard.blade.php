@extends('admin_master')
@section('dashboard')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<header>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</header>
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard v4</h3>
                    @if(session('vendor_id'))
                    <p>{{ session('vendor_id') }}</p>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard v3
                        </li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-6">
                    @if(session('hotel_id'))
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <span contenteditable="true" data-field="name">
                                    <h3 class="card-title">Hotel {{ $hotel->name }}</h3>
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span>Address: {{ $hotel->address }}</span>
                                    <span>Phone: {{ $hotel->phone }}</span>
                                    <span>City: {{ $hotel->city }}</span>
                                    <span>State: {{ $hotel->state }}</span>
                                    <span>Country: {{ $hotel->country }}</span>
                                    <span>Description: {{ $hotel->description }}</span>
                                    <span>Rating: {{ $hotel->star_rating }}</span>
                                </p>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Hotel Rooms</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="row">
                                    @if(!session('hotel_id'))
                                    <ul id="room-list">
                                        @foreach($rooms as $room)
                                        <li data-room-id="{{ $room->id }}" data-room-type="{{ $room->room_type }}" data-number-of-rooms="{{ $room->number_of_rooms }}">
                                            <h5>Room id: {{ $room->id }}</h5>
                                            <h5>Room Type: {{ $room->room_type }}</h5>
                                            <h5>Number of Rooms: ({{ $room->number_of_rooms }})</h5>
                                            <button class="edit-btn">Edit</button>
                                        </li>
                                        @endforeach
                                    </ul>

                                    <div id="room-form-template" style="display: none;">
                                        <form>
                                            @csrf
                                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                                            <label for="room_type">Room Types:</label>
                                            <input type="text" name="room_type" value="{{ $room->room_type }}">
                                            <br>
                                            <label for="number_of_rooms">No of Rooms:</label>
                                            <input type="number" name="number_of_rooms" value="{{ $room->number_of_rooms }}">
                                            <br>
                                            <button type="submit">Save</button>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // $('#room-list li').each(function() {
    //     $(this).append('<button class="edit-btn">Edit</button>');
    // });

    // Create a Handlebars template for the form
    var formTemplate = Handlebars.compile($('#room-form-template').html());

    $('#room-list').on('click', '.edit-btn', function() {
        var $li = $(this).parent();
        var roomId = $(this).data('room_id');
        var roomType = $(this).data('room_type');
        var numRooms = $(this).data('number_of_rooms');

        // Render the form template with the correct room data
        var formData = {
            room_id: roomId,
            room_type: roomType,
            number_of_rooms: numRooms
        };
        var $formHtml = formTemplate(formData);

        $li.html($formHtml);
    });

    $('#room-list').on('submit', 'li form', function() {
        var $form = $(this);
        var roomId = $form.find('input[name="room_id"]').val();
        var roomData = $form.serialize();

        $.POST('/room/update/' + roomId, roomData)
            .done(function(data) {
                // Update the list item with the new data
                $form.closest('li').html('<h5>Room Type: ' + data.room_type + '</h5><h5>Number of Rooms: (' + data.number_of_rooms + ')</h5><button class="edit-btn">Edit</button>');
            });

        return false;
    });
</script>
@endsection