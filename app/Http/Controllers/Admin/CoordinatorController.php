<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoordinatorController extends Controller
{
    //
    
    private $coordinatorService;
    
    public function __construct(\App\Services\CoordinatorService $coordinatorService){
        $this->coordinatorService = $coordinatorService;
    }
    
    public function index(){
        $coordinators = $this->coordinatorService->getAllCoordinators();
        return view('admin.viewcoordinators')->with('coordinators', $coordinators);
    }
    
    public function create(){
        return view('admin.addcoordinator');
    }
    
    public function store(Request $request){
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
           'password' => 'required|min:8|confirmed'
        ]);
        
        $user = $this->coordinatorService->createCoordinator($request['name'], $request['email'], $request['password']);
        
        if($user ==  null){
            return redirect()->back()->with('error', 'could not create user');
        }
        
        return redirect()->back()->with('success', $user->name.' was created succcessfully as a coordinator');
    }
}
