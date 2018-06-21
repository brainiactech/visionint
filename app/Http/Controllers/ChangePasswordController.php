<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    //
    private $userService;
    
    public function __construct(\App\Services\UserService $userService){
        $this->userService = $userService;
    }
    
    public function changePassword(Request $request){
        $this->validate($request, [
           'password' => 'required|min:8|confirmed' 
        ]);
        
        if($this->userService->changeUserPassword(auth()->user(), $request['password'])){
            return redirect()->back()->with('success', 'password changed successfully');
        }
        return redirect()->back()->with('error', 'password could not be changed');
    }
}
