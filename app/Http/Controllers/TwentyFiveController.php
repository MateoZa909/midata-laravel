<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwentyFiveController extends Controller
{
    //
    public function __invoke() {
        return view("twenty-five");
    }
}
