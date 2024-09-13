<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Post;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    //Index page 
    public function index()
    {
        $posts = Post::all();
        return view("home", ["posts" => $posts]);
    }

    //showJobsList
    public function show()
    {
        $jobs = Jobs::with('employer')->latest()->paginate(5);
        return view("jobs/index", ["jobs" => $jobs]);
    }
    //post job
    public function post()
    {
        request()->validate([
            "title" => ["required", "string", "min:3"],
            "salary" => ["required"],
        ]);

        Jobs::create([
            "title" => request("title"),
            "salary" => request("salary"),
            'employer_id' => random_int(1, 10)
        ]);

        return redirect('/jobs');
    }

    //update
    public function update($id)
    {
        request()->validate([
            'title' => ['required', 'string', 'min:3'],
            'salary' => ['required'],
        ]);
        $job = Jobs::find($id);
        $job->title = request('title');
        $job->salary = request('salary');

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id)->with('success', '200');
    }


    //delete
    public function delete($id)
    {
        $job = Jobs::find($id);
        $job->delete();
        return redirect('/jobs');
    }

}
