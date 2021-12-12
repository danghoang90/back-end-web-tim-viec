<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;



class AuthController extends Controller
{
    public function registerCustomer(RegisterCustomerRequest $request)
    {
        $customer = Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone' => $request->input('phone'),
        ]);
        return $customer;
    }

    public function loginCustomer(Request $request)
    {
       if (!Auth::guard('customer')->attempt($request->only('email','password'))) {
           return response([
              'message' => 'Invalid credentials'
           ], Response::HTTP_UNAUTHORIZED);
       }
       $customer = Auth::guard('customer')->user();

       $token = $customer->createToken('token')->plainTextToken;

       $cookie = cookie('jwt',$token,60*24);

       return response([
           'message' => $token
       ])->cookie($cookie);
    }

    public function logoutCustomer()
    {
        $cookie = Cookie::forget('jwt');

        return response([
           'message' => 'Success'
        ])->withCookie($cookie);
    }

    public function customer()
    {
        return $customer = Auth::guard('customer')->user();
    }
}
