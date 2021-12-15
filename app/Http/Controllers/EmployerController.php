<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmployerRequest;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function list()
    {
        $employer = Employer::all();
        return response()->json($data =[
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
                'status' =>'errors',
                'message' =>'employer not exits'
            ];
        }else {
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
                'status' =>'errors',
                'message' =>'employer not exits'
            ];
        }else {
            $data = [
                'status' => 'success',
                'data' => $employer
            ];
        }
        return response()->json($data);
    }

    public function edit(UpdateEmployerRequest $request,$id)
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
            $employer->save();
        }catch (\Exception $exception) {
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
        return response()->json($data);
    }
}
