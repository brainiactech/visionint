<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    //
    private $memberService;
    private $userService;
    
    public function __construct(\App\Services\MemberService $memberService,
    \App\Services\UserService $userService ){
        $this->memberService = $memberService;
        $this->userService = $userService;
    }
    
    /**
     * 
     * This method handles api requests to activate an account.
     * 
     * @param type $userId | the id of the user to be activated.
     * 
     * @return type
     * 
     */
    public function activateAccount($userId){
        $user = \App\User::find($userId);
        if($user == null){
            return redirect()->back()->with('error', 'user not found');
        }
        
        return ($this->userService->activateUser($user)) ? redirect()->back()->with('success',  $user->name.'\'s account activated')
                : redirect()->back()->with('error',  $user->name.'\'s account could not be activated');
        
    }
    
    
    /**
     * 
     * This method handles api requests to deactivate an account.
     * 
     * @param type $userId | the id of the user to be deactivated.
     * 
     * @return type
     * 
     */
    public function deactivateAccount($userId){
        $user = \App\User::find($userId);
        if($user == null){
            return redirect()->back()->with('error', 'user not found');
        }
        
        return ($this->userService->deactivateUser($user)) ? redirect()->back()->with('success', $user->name.'\'s account deactivated')
                : redirect()->back()->with('error',  $user->name.'\'s account could not be deactivated');
    }
    
    
    
    
    
}
