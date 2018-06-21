<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    private $memberService;
    private $portfolioService;
    
    public function __construct(\App\Services\MemberService $memberService,
    \App\Services\PortfolioService $portfolioService) {
        $this->memberService = $memberService;
        $this->portfolioService = $portfolioService;
    }
    
    public function show(){
        $awaitingPortfolios = $this->portfolioService->getAllUnReviewedPortfolios();
        return view('admin.index')
                ->with('awaitingPortfolios', $awaitingPortfolios);
    }
}
