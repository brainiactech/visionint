<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function showDashboard(){
        if(auth()->user()->role == UserRole::$ADMINISTRATOR){
           return redirect('/admin');
        }
        else if (auth()->user()->role == UserRole::$AGENT){
           return redirect('/agent');
        }
       else
        return redirect('/customer');
    }
    
    
}
