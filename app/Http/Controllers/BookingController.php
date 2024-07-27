<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use App\Models\Customer;

class BookingController extends Controller
{
    //

    /**
     * Display a listing of the bookings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with('room', 'customer')->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $customers = Customer::all();
        return view('bookings.create', compact('rooms', 'customers'));
    }

    /**
     * Store a newly created booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required|exists:rooms,id',
            'customer_id' => 'required|exists:customers,id',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'num_guests' => 'required|integer',
            'total_cost' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $booking = new Booking();
            $booking->room_id = $request->input('room_id');
            $booking->customer_id = $request->input('customer_id');
            $booking->checkin_date = $request->input('checkin_date');
            $booking->checkout_date = $request->input('checkout_date');
            $booking->num_guests = $request->input('num_guests');
            $booking->total_cost = $request->input('total_cost');
            $booking->status = 'pending';
            $booking->save();

            return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
        }
    }

    /**
     * Display the specified booking
     */
    public function show($id)
    {
        $booking = Booking::with('room', 'customer')->find($id);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified booking.
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        $rooms = Room::all();
        $customers = Customer::all();
        return view('bookings.edit', compact('booking', 'rooms', 'customers'));
    }

    /**
     * Update the specified booking in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required|exists:rooms,id',
            'customer_id' => 'required|exists:customers,id',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'num_guests' => 'required|integer',
            'total_cost' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $booking = Booking::find($id);
            $booking->room_id = $request->input('room_id');
            $booking->customer_id = $request->input('customer_id');
            $booking->checkin_date = $request->input('checkin_date');
            $booking->checkout_date = $request->input('checkout_date');
            $booking->num_guests = $request->input('num_guests');
            $booking->total_cost = $request->input('total_cost');
            $booking->save();

            return redirect()->route('bookings.index')->with('success', 'Booking updated successfully!');
        }
    }

    /**
     * Remove the specified booking from storage.
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }
}
