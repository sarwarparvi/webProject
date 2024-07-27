<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\Hotel;
use App\Models\Room;

class RoomController extends Controller
{
    //

    //Room Registration
    public function registerForm(Hotel $hotel)
    {
        return view('/hotel/room_registration_form', compact('hotel'));
    }

    public function registerRoom(Request $request, Hotel $hotel)
    {
        $messages = [
            'room_type.unique' => 'The :input room type is already registered.',
        ];
        $validatedData = $request->validate([
            'room_type' => [
                'required',
                'string',
                Rule::unique('rooms', 'room_type')->where(function ($query) use ($hotel) {
                    $query->where('hotel_id', $hotel->id);
                }),
            ],
            'number_of_rooms' => 'required|integer',
        ], $messages);

        if (!$validatedData) {
            return back()->withErrors($validatedData)->withInput();
        }

        $room = $hotel->rooms()->firstOrCreate(
            [
                'hotel_id' => $hotel->id, // Add the hotel ID to the conditions
                'room_type' => $validatedData['room_type'],
            ],
            [
                'number_of_rooms' => $validatedData['number_of_rooms'],
            ]
        );

        //Create a new room instance
        // $room = new Room();
        // $room->hotel_id = session('hotel_id');
        // $room->room_type = $request->input('room_type');
        // $room->number_of_rooms = $request->input('number_of_rooms');
        // $room->save();

        //Redirect to the hotel show page
        //return back();
        return redirect()->route('vendor_dashboard', '$hotel->id');

        // return redirect()->route('hotels.show', $hotel->id);
    }

    public function updateRoom(Request $request, $roomId)
    {
        $room = Room::find($roomId);
        $room->room_type = $request->input('room_type');
        $room->number_of_rooms = $request->input('number_of_rooms');
        $room->save();
        return response()->json($room);
    }

    public function dashboard(Hotel $hotel)
    {
        return view('/vendor/dashboard', compact('hotel'));
    }
}
//dd($request->method());