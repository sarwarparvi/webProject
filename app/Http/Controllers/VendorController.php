<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Models\Vendor;
use App\Models\Hotel;

class VendorController extends Controller
{
    //
    public function registerForm()
    {
        return view('/vendor/register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vendors',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'vendor_type' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $vendor = new Vendor();
            $vendor->name = $request->input('name');
            $vendor->email = $request->input('email');
            $vendor->password = Hash::make($request->input('password'));
            $vendor->address = $request->input('address');
            $vendor->phone = $request->input('phone');
            $vendor->vendor_type = $request->input('vendor_type');
            //$vendor->email_verification_token = Str::random(60);

            $vendor->save();

            Auth::guard('vendor'); //->login($vendor);
            $request->session()->put('vendor_id', $vendor->id);
            return redirect()->route('hotel_reg_form');
            //return redirect()->route('vendor_login_form')->with('success', 'Vendor registered successfully!');
        }
    }

    public function loginForm()
    {
        return view('/vendor/login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // $credentials = [
            //     'email' => $request->input('email'),
            //     'password' => $request->input('password'),
            // ];

            if (Auth::guard('vendor')->attempt($request->only('email', 'password'))) {
                $request->session()->put('vendor_id', Auth::guard('vendor')->user()->id);

                $vendorId = Auth::guard('vendor')->user()->id;
                $hotel = Hotel::where('vendor_id', $vendorId)->first();

                if ($hotel === null) {
                    return redirect()->route('vendor_dashboard');
                }

                if ($hotel) {
                    session(['hotel_id' => $hotel->id]);
                } else {
                    // Handle the case where no hotel is found for the vendor
                    // You can redirect to a error page or display a message
                    //return redirect()->route('vendor.error');
                    dd(session('hotel_id'));
                }

                return redirect()->route('vendor_dashboard')->with('success', 'Logged in successfully!');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function dashboard()
    {
        return view('/vendor/dashboard');
    }

    public function logout(Request $request)
    {
        // Remove the vendor's session
        $request->session()->forget('vendor_id');

        // Log out the vendor
        Auth::guard('vendor')->logout();

        // Redirect to the login page
        return redirect()->route('vendor_login_form');
    }

    public function hotel_reg()
    {
        return view('/vendor/hotel_registration_form');
    }

    public function hotel_registration()
    {
        return view('/vendor/hotel_reg_form');
    }
}
