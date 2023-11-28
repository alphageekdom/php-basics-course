<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $user = 'Luis';

        return view('pages/home', [
            "user" => $user,
            "age" => 36,
            "city" => 'Anaheim',

        ]);
    }

    public function about(){
        return view('pages/about');
    }
}
