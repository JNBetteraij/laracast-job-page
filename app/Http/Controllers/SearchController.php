<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $result = Job::where('title','LIKE','%'.request('query').'%')->get();

        return view('results/index',['jobs' => $result,'query' => request('query'),]);
    }
}
