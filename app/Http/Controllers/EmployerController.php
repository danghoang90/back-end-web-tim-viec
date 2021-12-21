<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmployerRequest;
use App\Models\Employer;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployerController extends Controller
{
    public function list()
    {
        $employer = Employer::all();
        return response()->json($data = [
            'status' => 'Success',
            'message' => 'List Employer',
            'data' => $employer
        ]);
    }

    public function destroy($id)
    {
        $employer = Employer::find($id);
        if (!$employer) {
            $data = [
                'status' => 'errors',
                'message' => 'employer not exits'
            ];
        } else {
            $employer->delete();
            $data = [
                'status' => 'Success',
                'message' => 'Xoá Thành Công!',
                'data' => Employer::all()
            ];
        }
        return response()->json($data);
    }

    public function update($id)
    {
        $employer = Employer::find($id);
        if (!$employer) {
            $data = [
                'status' => 'errors',
                'message' => 'employer not exits'
            ];
        } else {
            $data = [
                'status' => 'success',
                'data' => $employer
            ];
        }
        return response()->json($data);
    }

    public function edit(UpdateEmployerRequest $request, $id)
    {
        try {
            $employer = Employer::find($id);
            $employer->email = $request->email;
            $employer->contact_person_name = $request->contact_person_name;
            $employer->phone_number = $request->phone_number;
            $employer->name_employer = $request->name_employer;
            $employer->address_employer = $request->address_employer;
            $employer->city = $request->city;
            $employer->status = $request->status;
            $employer->personnel_size = $request->personnel_size;
            $employer->company_profile = $request->company_profile;
            $employer->logo = $request->logo;
            $employer->website = $request->website;
            $employer->save();
        } catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Không thể update employer'
            ];
            return response()->json($data);
        }
        $data = [
            'status' => 'success',
            'message' => 'Update employer Thành Công!'
        ];
        Mail::send('email_active_employer', ['employer' => $employer], function ($email) use ($employer) {
            $email->from('danghoangjp1990@gmail.com', 'Web tim viec');
            $email->to($employer->email, $employer->contact_person_name)->subject('Xác thực thành công!');
        });
        return response()->json($data);
    }

    public function show($id)
    {
        $posts = Post::where('status', 1)->where("employer_id", $id)->with('city','job','employer')->get();
        $employer = Employer::find($id);
       //$posts = $employer->posts()->where('status', 1)->get();
        return response()->json([
            'posts' => $posts,
            'employer'=> $employer]);
    }
}
