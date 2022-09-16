<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallBackController extends Controller
{
    public function __invoke(){
        return view('fallback.index');
    }
}
