<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\Customer;
use App\Models\Hotel;

class CustomerController extends Controller
{
    use ValidatesRequests;

    public function register(Request $request)
    {
        // dd($request);
        // if ($request->has('customer_register')) {
        //     // Register logic

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'phone' => 'required|string|min:11',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $customer = new Customer();
            $customer->first_name = $request->input('first_name');
            $customer->last_name = $request->input('last_name');
            $customer->email = $request->input('email');
            $customer->password = Hash::make($request->input('password'));
            $customer->phone = $request->input('phone');
            $customer->address = $request->input('address');
            $customer->city = $request->input('city');
            $customer->state = $request->input('state');
            $customer->country = $request->input('country');

            $customer->save();

            // Login the customer after registration
            Auth::guard('customer')->login($customer);
            $request->session()->put('customer_id', $customer->id);
            return redirect()->route('index', $customer);
            //return redirect()->intended(route('/'));
        }
    }

    public function login(Request $request)
    {

        // Login logic
        //
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } elseif (Auth::guard('customer')->attempt($request->only('email', 'password'))) {
            $request->session()->put('customer_id', Auth::guard('customer')->user()->id);
            return redirect()->intended(route('index', $request->id));
        } else {
            //dd($request);
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }

    public function logout(Request $request)
    {
        // Remove the vendor's session
        $request->session()->forget('customer_id');

        // Log out the vendor
        Auth::guard('customer')->logout();

        // Redirect to the login page
        return redirect()->route('index');
    }

    // public function dashboard(Hotel $hotel)
    // {
    //     $hotels = Hotel::find($hotel->all());
    //     return view('/index', compact('hotels'));
    // }

    public function hotel_list(Hotel $hotel)
    {
        $hotels = Hotel::find($hotel->all());
        return view('/hotels', compact('hotels'));
    }
}
