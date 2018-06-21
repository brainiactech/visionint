<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    
    private $memberService;
    
    public function __construct(\App\Services\MemberService $memberService) {
        $this->memberService = $memberService;
    }
    
    public function show(){
        $member = $this->memberService->getMemberByUserId(auth()->user()->id);
        return view('member.index')->with('member', $member);
    }
}
