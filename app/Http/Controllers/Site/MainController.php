<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function index()
    {
        return view('site.index');
    }
}
