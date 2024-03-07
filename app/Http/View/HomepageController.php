<?php

namespace App\Http\View;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('homepage');
    }

    public function index2() {
        return view('persons');
    }

    public function index3() {
        return view('person');
    }
}

