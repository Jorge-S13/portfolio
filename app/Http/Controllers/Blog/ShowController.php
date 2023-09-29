<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke()
    {
        return view('blog.show');
    }
}
