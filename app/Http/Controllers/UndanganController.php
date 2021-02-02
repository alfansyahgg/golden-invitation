<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index(){
        return view('main.homepage');
    }

    public function landing(){
        return view('main.dataundangan');
    }

    public function uploadfoto(){
        return view('main.uploadfoto');
    }
}
