<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LastTenController extends Controller
{
    //
    public function __invoke() {
        return view("lastTen");
    }
}
