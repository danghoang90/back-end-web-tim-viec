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
        $employer = Employer::query()->with();
        if ($request->name !="") {
            $employer->where('name_employer', 'LIKE','%' . $request->name . '%');
        }
        $employers = $employer->get();
        $data = [
            'status' => 'Success',
            'data' => $employers
        ];
        return response()->json($data);
    }

    public function searchPost(Request $request)
    {

        $post = Post::query()->with(['city','job']);

            if ($request->title !="") {
                $post->where('title', 'LIKE', '%' . $request->title . '%');
            }
            if ($request->job_id !="") {
                $post->where('job_id', '=', $request->job_id );
            }
            if ($request->city_id !="") {
                $post->where('city_id', '=', $request->city_id );
            }

             $posts =$post->get();
            $data = [
              'status' => 'Success',
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
