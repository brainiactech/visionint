<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    //
    private $memberService;
    
    public function __construct(\App\Services\MemberService $memberService) {
        $this->memberService = $memberService;
    }
    
    public function index(){
        return view('admin.allmembers')
                ->with('members', $this->memberService->getAllApprovedAndReviewedMembers());
    }
    
    public function show($id){
        $member = $this->memberService->getMemberById($id);
        return view('admin.singlemember')->with('member', $member);
    }
    
    /**
     * 
     * This method is responsible for accepting requests to approve a member.
     * 
     * @param Request $request
     * 
     */
    public function approveMember(Request $request){
        $this->validate($request, [
            'id' => 'required',
            
        ]);
        
        $member = $this->memberService->getMemberById($request['id']);
        if($member == null){
            return redirect()->back()->with('error', 'member does not exist');
        }
        $fullNameArray = explode(" ", $member->full_name);
        $lastName = count($fullNameArray >= 2) ? $fullNameArray[(count($fullNameArray) - 1)] : $member->full_name;
        if($this->memberService->approveMember($member, auth()->user()->id, $lastName."111") != null){
            return redirect()->back()->with('success', 'member approved successfully');
        }
        
        return redirect()->back()->with('error', 'could not approve member');
    }
    
    /**
     * 
     * This method is responsible for handling Http requests to disapprove a
     * member.
     * 
     * @param Request $request | the request to create.
     * 
     * @return type
     * 
     */
    public function disapproveMember(Request $request){
        $this->validate($request, [
            'id' =>'required'
        ]);
        
        $member = $this->memberService->getMemberById($request['id']);
        if($member == null){
            return redirect()->back()->with('error', 'member does not exist');
        }
        
        if($this->memberService->disapproveMember($member, auth()->user()->id)){
            return redirect()->back()->with('success', 'member disapproval successful');
        }
        
        return redirect()->back()->with('error', 'could not disapprove member');
    }
}
