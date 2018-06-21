<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showMember(){
        auth()->logout();
        return redirect()->back();
    }
}
