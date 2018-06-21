<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- ReferralService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to member's 
 * | referrals.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class ReferralService {

    private $portfolioService;

    public function __construct(PortfolioService $portfolioService) {
        $this->portfolioService = $portfolioService;
    }

    /**
     * 
     * This method is responsible for retrieving a paginated collection of all 
     * portfolios that was referred by a particular member.
     * 
     * @param \App\Member $member | the member in question.
     * @param limit | an integer value depicting how many records should be re-
     *   turned for each page.
     * 
     * @return paginated collection.
     * 
     */
    public function getAllPortfoliosReferredByThisMember($member, $limit = 15) {
        $portfolios = $this->portfolioService->getAllPortfoliosForAMember($member);
        $resultSet = [];
        if($portfolios != null){
            foreach($portfolios as $portfolio){
                $referedPortfolios = $this->portfolioService->getAllPortfoliosReferredByAPortfolio($portfolio);
                if($referedPortfolios != null){
                    foreach($referedPortfolios as $referedPortfolio){
                        array_push($resultSet, $referedPortfolio);
                    }
                }
            }
        }
        return new \Illuminate\Pagination\LengthAwarePaginator($resultSet, count($resultSet), $limit);
    }

}
