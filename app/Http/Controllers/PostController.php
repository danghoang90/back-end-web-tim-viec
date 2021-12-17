<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\City;
use App\Models\Job;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function getList()
    {
        $post = Post::with(['city', 'job'])->get();
        return response()->json($data = [
            'status' => 'success',
            'message' => 'list post',
            'data' => $post
        ]);

    }

    public function createPost(CreatePostRequest $request)
    {

        try {
            $post = new Post();
            $post->code = "CODE".rand(1,50000);
            $post->title = $request->title;
            $post->salary = $request->salary;
            $post->position = $request->position;
            $post->experience = $request->experience;
            $post->expiration_date = $request->expiration_date;
            $post->description = $request->description;
            $post->quantity = $request->quantity;
            $post->gender = $request->gender;
            $post->status = $request->status;
            $post->city_id = $request->city_id;
            $post->job_id = $request->job_id;
            $post->save();

        }catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Không thể thêm bài.'
            ];
            return response()->json($data);
        }
        $data = [
            'status' => 'success',
            'message' => 'Đăng bài thành công !'
        ];
        return response()->json($data);
    }


    public function update($id)
    {
        $post = Post::with(['city','job'])->findOrFail($id);

        return response()->json($data = [
            'status' => 'success',
            'data' => $post
        ]);
    }

    public function edit(CreatePostRequest $request ,$id)
    {

        try {
            $post = Post::with(['city','job'])->findOrFail($id);
            $post->code = rand(1,50000)."CODE".rand(1,50000);
            $post->title = $request->title;
            $post->salary = $request->salary;
            $post->position = $request->position;
            $post->experience = $request->experience;
            $post->expiration_date = $request->expiration_date;
            $post->description = $request->description;
            $post->quantity = $request->quantity;
            $post->gender = $request->gender;
            $post->status = $request->status;
            $post->city_id = $request->city_id;
            $post->job_id = $request->job_id;
            $post->save();

        }catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Cập nhật thất bại .'
            ];
            return response()->json($data);
        }
        $data = [
            'status' => 'success',
            'message' => 'Cập nhật thành công !'
        ];
        return response()->json($data);
    }

    public function destroy($id)
    {
        $post = Post::with(['city','job'])->findOrFail($id);
        if(!$post) {
            $data = [
                'status' =>'errors',
                'message' =>'Không có bài '
            ];
        }else {
            $post->delete();
            $data = [
                'status' =>'success',
                'message' =>'Xóa thành công !',
                'posts' => Post::with(['city','job'])->get()
            ];
        }
        return response()->json($data);
    }
}
