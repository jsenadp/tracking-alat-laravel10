<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('/page/admin');
    }

    public function cabcirebon(){
        return view('/page/cirebon');
    }

    public function cabbalikpapan(){
        return view('/page/balikpapan');
    }

    public function cabsurabaya(){
        return view('/page/surabaya');
    }

    public function cabpalembang(){
        return view('/page/palembang');
    }

    public function cabjambi(){
        return view('/page/jambi');
    }

    public function kirimalat(){
        return view('/page/kirimalat');
    }
}

