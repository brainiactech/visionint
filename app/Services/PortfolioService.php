<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- PortfolioService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to member's 
 * | portfolio.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class PortfolioService {

    /**
     * 
     * This method is responsible for creating a portfolio entry for a member
     * 
     * @param type $memberId | the id of the member in question.
     * @param type $schemeId | the id of the scheme selected.
     * @param type $startingClassId  | the id of the starting class selected.
     * @param type $stageId | the id of the stage selected.
     * @param type $tellerId | the teller id used to register for this portfolio.
     * @param type $transactionId | the transaction id used to register for this
     *   portfolio.
     * @param type $approvalStatus | the approval status for the portfolio
     * @param type $disapprovedStatus | the disapproved status for this portfolio.
     * @param type $referredBy | the id of the portfolio that referred this 
     *   portfolio.
     * 
     * @return type $portfolio
     * 
     */
    public function createPortfolio($memberId, $schemeId, $startingClassId, $stageId,
            $tellerId, $transactionId, $approvalStatus, $disapprovedStatus, $referredBy, $bankPaidInto) {
        $portfolio =  \App\Portfolio::create([
                    'member_id' => $memberId,
                    'scheme_id' => $schemeId,
                    'starting_class_id' => $startingClassId,
                    'stage_id' => $stageId,
                    'teller_id' => $tellerId,
                    'transaction_id' => $transactionId,
                    'approved_status' => $approvalStatus,
                    'disapproved_status' => $disapprovedStatus,
                    'refered_by' => $referredBy,
                    'bank_paid_into' => $bankPaidInto
        ]);
        
        if($portfolio != null){
            $portfolio->portfolio_code = 'A000000' . $portfolio->id;
            $portfolio->save();
        }
        
        return $portfolio;
    }
    
    /**
     * 
     * This method is responsible for retrieving all portfolios $member
     * 
     * @param $member | the member whose portfolio is to be retrieved.
     * 
     * @return array collection
     * 
     */
    public function getAllPortfoliosForAMember($member){
        if($member != null){
            return \App\Portfolio::where('member_id', '=', $member->id)->get();
        }
        return [];
    }
    
    /**
     * 
     * This method is responsible for retrieving all approved portfolio for a 
     * member
     * 
     * @param type $member |the member int quesiton.
     * 
     * @return array collection
     * 
     */
    public function getAllApprovedPortfoliosForAMember($member){
        if($member != null){
            return \App\Portfolio::where('member_id', '=', $member->id)->where('approved_status', '=', true)->get();
        }
        return [];
    }
    
    /**
     * 
     * This method is responsible for retrieving all portfolios referred by a 
     * particular portfolio.
     * 
     * @param \App\Portfolio $portfolio | the portfolio 
     * 
     */
    public function getAllPortfoliosReferredByAPortfolio(\App\Portfolio $portfolio){
        if($portfolio != null){
            return \App\Portfolio::where('refered_by', '=', $portfolio->id)->get();
        }
        return null;
    }
    
    /**
     * 
     * This method is responsible for crediting a portfolio with a specific amo-
     * unt.
     * 
     * @param type $portfolioToCredit |the portfolio record to be credited.
     * @param type $amount | the amount that the portfolio record is to be cred-
     *   ited with.
     * 
     */
    public function creditAPortfolioRecord($portfolioToCredit, $amount){
        if($portfolioToCredit != null){
            $portfolioToCredit->stage_id += $amount;
            return ($portfolioToCredit->save()) ? $portfolioToCredit : null;
        }
        return null;
    }
    
    /**
     * 
     * This method is responsible for retrieving portfolio record by it's port-
     * folio code.
     * 
     * @param type $portfolioCode | the portfolio code which is the query.
     * 
     * @return App\Portfolio.
     * 
     */
    public function getPortfolioByPortfolioCode($portfolioCode){
        $portfolios = \App\Portfolio::where('portfolio_code', '=', $portfolioCode)->get();
        return (count($portfolios) > 0) ? $portfolios->get(0) : null;
    }
    
    /**
     * 
     * This method is responsible for retrieving all portfolios that have not yet
     * been reviewed i.e they have neither been approved nor disapproved.
     * 
     * @param int $limit | how many should be returned.
     * 
     * @return paginated collection.
     * 
     */
    public function getAllUnReviewedPortfolios($limit = 15){
        return \App\Portfolio::where('approved_status', '=', false)
                ->where('disapproved_status', '=', false)->paginate($limit);
    }
    
    /**
     * 
     * This method is responsible for retrieving a portfolio by it's id.
     * 
     * @param type $id | the id of the portfolio to be retrieved.
     * 
     * @return \App\Portfolio 
     * 
     */
    public function getPortfolioById($id){
        return \App\Portfolio::find($id);
    }
    
    /**
     * 
     * This method is responsible for approving a portfolio registration.
     * 
     * @param \App\Portfolio $portfolio | the portfolio to be approved.
     * @param int approvedBy | the id of the user doing the approval.
     * 
     * @return \App\Portfolio | the approved portfolio.
     * 
     */
    public function approvePortfolioRegistration($portfolio, $approvedBy){
        if($portfolio != null){
            $portfolio->approved_status = true;
            $portfolio->disapproved_status = false;
            if($portfolio->refered_by != 0){
                $referalPortfolio = $this->getPortfolioById($portfolio->refered_by);
                $this->creditAPortfolioRecord($referalPortfolio, 1);
            }
            return ($portfolio->save()) ?  $portfolio : null;
        }
        return null;
    }
    
    /**
     * 
     * This method is responsible for disapproving a portfolio registration.
     * 
     * @param \App\Portfolio $portfolio | the portfolio to be disapproved.
     * 
     * @return \App\Portfolio.
     * 
     */
    public function disapprovePortfolioRegistration($portfolio){
        if($portfolio != null){
            $portfolio->disapproved_status = true;
            $portfolio->approved_status = false;
            return ($portfolio->save()) ? $portfolio : null;
        }
        return null;
    }
}
