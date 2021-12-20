<?php

namespace App\Http\Controllers;

use App\Models\Applynow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplynowController extends Controller
{

    public function getAll($employer_id)
    {
        $apply_now = Applynow::where("employer_id", $employer_id)->where("status", 1)->with(['customer', 'post', 'employer'])->orderByDesc('created_at')->get();
        return response()->json(['data' => $apply_now]);
    }


    public function create(Request $request)
    {
        $apply1 = Applynow::all();
        foreach ($apply1 as $apply) {

            if ($apply->customer_id == $request->customer_id && $apply->employer_id == $request->employer_id && $apply->post_id == $request->post_id) {
                $data = [
                    'status' => 'success',
                    'message' => 'Chờ phản hồi'
                ];
                return response()->json($data);
            }
        }
        try {
            $applynow = new Applynow();
            $applynow->customer_id = $request->customer_id;
            $applynow->employer_id = $request->employer_id;
            $applynow->post_id = $request->post_id;
            $applynow->save();
        } catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Không thể ứng tuyển'
            ];
            return response()->json($data);
        }
        $data = [
            'status' => 'success',
            'message' => 'Chờ phản hồi'
        ];
        return response()->json($data);
    }


    public function show($id)
    {
        $apply_now = Applynow::find($id);
        return response()->json($data = [
            'data' => $apply_now]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

        $apply_now = Applynow::find($id);
        $apply_now->status = $request->status;
        $apply_now->update();
        $data = [
            'status' => 'Success',
            'message' => 'Xoá Thành Công!'
        ];
        return response()->json($data);
    }


    public function destroy($id)
    {
        $apply_now = Applynow::find($id);
        if (!$apply_now) {
            $data = [
                'status' => 'errors',
                'message' => 'Không tồn tại'
            ];
        } else {
            $apply_now->delete();
            $data = [
                'status' => 'Success',
                'message' => 'Xoá Thành Công!'
            ];
        }
        return response()->json($data);
    }
}
