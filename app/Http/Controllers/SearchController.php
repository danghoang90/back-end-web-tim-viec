<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchEmployer(Request $request)
    {
        $employer = Employer::query();
        if ($request->name !="") {
            $employer->where('name_employer', 'LIKE','%' . $request->name . '%');
        }
        $employers = $employer->with('posts')->get();
        $data = [
            'status' => 'Success',
            'message' => 'employer',
            'data' => $employers
        ];
        return response()->json($data);
    }

    public function searchPost(Request $request)
    {

        $post = Post::query();

            if ($request->title) {
                $post->where('title', 'LIKE', '%' . $request->title . '%');
            }
            if ($request->job_type_id && $request->job_type_id !=1) {
                $post->where('job_type_id', '=', $request->job_id );
            }
            if ($request->city_id && $request->city_id !=1) {
                $post->where('city_id', '=', $request->city_id );
            }

             $posts =$post->with(['employer','city','job','applyNow'])->get();
             $data = [
              'status' => 'Success',
                'message' => 'List post',
              'data' => $posts
            ];
        return response()->json($data);

    }


    public function getCity()
    {
        $city = City::all();
        return response()->json($city);
    }
    public function getJob()
    {
        $job = Job::all();
        return response()->json($job);
    }
}
