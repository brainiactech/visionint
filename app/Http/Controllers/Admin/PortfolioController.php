<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller {

    //
    private $portfolioService;
    private $memberService;
    private $schemeService;

    public function __construct(\App\Services\PortfolioService $portfolioService, \App\Services\MemberService $memberService, \App\Services\SchemeService $schemeService) {
        $this->portfolioService = $portfolioService;
        $this->memberService = $memberService;
        $this->schemeService = $schemeService;
    }

    public function show($id) {
        $portfolio = $this->portfolioService->getPortfolioById($id);
        $member = $this->memberService->getMemberById($portfolio->member_id);
        $schemeName = ($portfolio != null) ? $this->schemeService->determineScheme($portfolio->scheme_id) : null;
        return view('admin.singleportfolio')
                        ->with('portfolio', $portfolio)
                        ->with('schemeName', $schemeName)
                        ->with('member', $member);
    }

    public function showMemberPortfolios($memberId) {
        $member = $this->memberService->getMemberById($memberId);
        if ($member == null) {
            return redirect()->back()->with('error', 'specified member not found');
        }

        $portfolios = $this->portfolioService->getAllApprovedPortfoliosForAMember($member);
        if ($portfolios == null) {
            return redirect()->back()->with('error', 'could not retrieve portfolios');
        }

        return view('admin.singlememberportfolio')->with('portfolios', $portfolios);
    }
    
    public function approvePortfolio(Request $request){
        $this->validate($request, [
            'portfolioId' => 'required'
        ]);
        
        $portfolio = $this->portfolioService->getPortfolioById($request['portfolioId']);
        if($portfolio == null){
            return redirect()->back()->with('error', 'portfolio not found');
        }
        
        $member = $this->memberService->getMemberById($portfolio->member_id);
        if($member == null){
            return redirect()->back()->with('error', 'member not found');
        }
        $fullNameArray = explode(" ", $member->full_name);
        $lastName = count($fullNameArray >= 2) ? $fullNameArray[(count($fullNameArray) - 1)] : $member->full_name;
        $approvedMember = $this->memberService->approveMemberIfNotYetApproved($member, auth()->user()->id, $lastName."111");
        if($approvedMember == null){
            return redirect()->back()->with('error', 'could not approve member');
        }
        
        $approvedPortfolio = $this->portfolioService->approvePortfolioRegistration($portfolio, auth()->user()->id);
        if($approvedPortfolio == null){
            return redirect()->back()->with('error', 'could not approve scheme registration');
        }
        
        return redirect()->back()->with('success', 'scheme registration approval successful');
        
    }
    
    public function disapprovePortfolio(Request $request){
        $this->validate($request, [
            'portfolioId' => 'required'
        ]);
        
        $portfolio = $this->portfolioService->getPortfolioById($request['portfolioId']);
        if($portfolio == null){
            return redirect()->back()->with('error', 'portfolio not found');
        }
        
        $member = $this->memberService->getMemberById($portfolio->member_id);
        if($member == null){
            return redirect()->back()->with('error', 'member not found');
        }
        
        $disapprovedPortfolio = $this->portfolioService->disapprovePortfolioRegistration($portfolio);
        if($disapprovedPortfolio == null){
            return redirect()->back()->with('error', 'could not disapprove scheme registration');
        }
        
        return redirect()->back()->with('success', 'scheme registration disapproval successful');
    }
}
