<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterCustomerRequest;
use App\Http\Requests\RegisterEmployerRequest;
use App\Models\Customer;
use App\Models\Employer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function registerCustomer(RegisterCustomerRequest $request)
    {
        try {
            $customer = Customer::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'phone' => $request->input('phone'),
            ]);
            Mail::send('email', ['customer' => $customer], function ($email) use ($customer) {
                $email->from('danghoangjp1990@gmail.com', 'Web tim viec');
                $email->to($customer->email, $customer->name)->subject('Đăng ký thành công!');
            });
        } catch (Exception $exception) {
            return response()->json($data = [
                'status' => 'error',
                'message' => 'Email đã tồn tại !'
            ]);
        }
        return response()->json($data = [
            'status' => 'success',
            'message' => 'Đăng ký thành công!'
        ]);
    }

    public function loginCustomer(Request $request)
    {
        if (!Auth::guard('customer')->attempt($request->only('email', 'password'))) {
            $data = [
                'status' => 'error',
                'message' => 'Tài khoản hoặc mật khẩu không đúng !'
            ];
            return response()->json($data);
        }
        $customer = Auth::guard('customer')->user();

        $token = $customer->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24);

        return response([
            'status' => 'Success',
            'message' => 'Đăng nhập thành công !',
            'token' => $token,
            'data' => $customer
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

    public function registerEmployer(RegisterEmployerRequest $request)
    {
        try {
            $employer = Employer::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'contact_person_name' => $request->input('contact_person_name'),
                'phone_number'=> $request->input('phone_number'),
                'name_employer'=> $request->input('name_employer'),
                'address_employer'=> $request->input('address_employer'),
                'city'=> $request->input('city'),
                'status'=> $request->input('status')
            ]);
            Mail::send('email_employer',['employer'=>$employer], function ($email) use ($employer) {
                $email->from('danghoangjp1990@gmail.com','Web tim viec');
                $email->to($employer->email,$employer->contact_person_name)->subject('Đăng ký thành công!');
            });
        }catch (Exception $exception){
            return response()->json($data = [
                'status'=>'error',
                'message'=>'Email đã tồn tại !'
            ]);
        }
        return response()->json($data = [
            'status'=>'success',
            'message'=>'Đăng ký thành công!'
        ]);
    }

    public function loginEmployer(Request $request)
    {
        if (!Auth::guard('employer')->attempt($request->only('email', 'password'))) {
            $data = [
                'status' => 'error',
                'message' => 'Tài khoản hoặc mật khẩu không đúng !'
            ];
            return response()->json($data);
        }
        $employer = Auth::guard('employer')->user();

        $token = $employer->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24);

        return response([
            'status' => 'Success',
            'message' => 'Đăng nhập thành công !',
            'token' => $token,
            'data' => $employer
        ])->cookie($cookie);
    }
    public function logoutEmployer()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }

    public function employer()
    {
        return $employer = Auth::guard('employer')->user();
    }


}
