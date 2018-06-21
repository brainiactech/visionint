<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NetworkController extends Controller
{
    //
    private $portfolioService;
    private $referralService;
    private $memberService;
    
    public function __construct(\App\Services\PortfolioService $portfolioService,
    \App\Services\ReferralService $referralService, \App\Services\MemberService $memberService) {
        $this->portfolioService = $portfolioService;
        $this->referralService = $referralService;
        $this->memberService = $memberService;
    }
    
    public function show(){
        $member = $this->memberService->getMemberByUserId(auth()->user()->id);
        if($member == null) { return redirect()->back()->with('error', 'member not found'); }
        return view('member.network')->with('portfolios', $this->referralService->getAllPortfoliosReferredByThisMember($member));
    }
}
