<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\Hotel;
use App\Models\Room;

use function Laravel\Prompts\error;

class HotelController extends Controller
{
    //
    public function register_hotel(Request $request)
    {
        // Validate the hotel registration form
        $validator = Validator::make($request->all(), [
            'hotel_name' => 'required|string|max:255',
            'hotel_address' => 'required|string|max:255',
            'hotel_city' => 'required|string|max:255',
            'hotel_state' => 'required|string|max:255',
            'hotel_country' => 'required|string|max:255',
            'hotel_phone' => 'required|string|max:20',
            'hotel_description' => 'required|string|max:500',
            'hotel_rating' => 'required|string',
        ]);
        if ($validator->fails()) {
            //dd($request->all());
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // Get the authenticated vendor
            $vendor = Auth::guard('vendor')->user();

            // Create a new hotel instance
            $hotel = new Hotel();
            $hotel->name = $request->input('hotel_name');
            $hotel->address = $request->input('hotel_address');
            $hotel->city = $request->input('hotel_city');
            $hotel->state = $request->input('hotel_state');
            $hotel->country = $request->input('hotel_country');
            $hotel->phone = $request->input('hotel_phone');
            $hotel->description = $request->input('hotel_description');
            $hotel->star_rating = $request->input('hotel_rating');
            $hotel->vendor_id = $vendor->id;

            // Save the hotel
            $hotel->save();

            // Redirect to the hotel dashboard
            return redirect()->route('vendor_dashboard');
            // return redirect()->route('vendor.hotel.dashboard', $hotel->id);
        }
    }


    public function showHotel(Hotel $hotel)
    {
        //$hotel->session()->put('hotel_id');
        //session('hotel_id');
        $hotel = Hotel::find($hotel->id);
        if ($hotel->id === session('hotel_id')) {
            return view('/vendor/dashboard', compact('hotel'));
        } else {
            return redirect()->back();
        }
    }

    public function dashboard(Hotel $hotel)
    {
        $rooms = $hotel->rooms; // assuming rooms relationship defined in the Hotel model
        $hotel = Hotel::find($hotel->id);
        if ($hotel->id === session('hotel_id')) {
            return view('/vendor/dashboard', compact('hotel', 'rooms'));
        } else {
            return redirect()->back();
        }
    }



    // public function saveRoom(Request $request)
    // {
    //     // Get the hotel instance (assuming it's already registered)
    //     $hotel = Hotel::find($request->input('hotel_id'));

    //     // Store room information
    //     $room = new Room();
    //     $room->hotel_id = $hotel->id;
    //     $room->room_type = $request->input('room_type');
    //     $room->number_of_rooms = $request->input('number_of_rooms');
    //     $room->save();

    //     return redirect()->route('vendor_dashboard', $hotel->id);
    // }
}
