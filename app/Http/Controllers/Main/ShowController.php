<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke()
    {
        return view('main.show');
    }
}
