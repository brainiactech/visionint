<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    //
    private $portfolioService;
    private $memberService;
    
    public function __construct(\App\Services\PortfolioService $portfolioService,
    \App\Services\MemberService $memberService){
        $this->portfolioService = $portfolioService;
        $this->memberService = $memberService;
    }
    
    public function show(){
        $member = $this->memberService->getMemberByUserId(auth()->user()->id);
        $portfolios = $this->portfolioService->getAllApprovedPortfoliosForAMember($member);
        return view('member.portfolio')->with('portfolios', $portfolios);
    }
}
