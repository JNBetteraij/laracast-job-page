<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        // https://laracasts.com/discuss/channels/laravel/pass-array-in-route-missing-required-parameter-for-route

        return view('results/index',['jobs' => $tag->jobs,'query' => request('query'),]);
    }
}
