<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

    //
    protected $table = 'Portfolios';
    protected $fillable = [
        'member_id', 'scheme_id', 'starting_class_id', 'stage_id', 'teller_id',
        'transaction_id', 'approved_status', 'disapproved_status', 'refered_by',
        'bank_paid_into'
    ];

    /**
     * 
     * This method helps to retrieve the String counterpart of the scheme Id.
     * 
     * @return string
     * 
     */
    public function getSchemeName() {
        $schemeId = $this->scheme_id;
        switch ($schemeId) {
            case($schemeId == \App\Schemes::$HOUSEOWNERSHIPSCHEME):
                return "House Ownership Scheme";
            case ($schemeId == \App\Schemes::$KEKEANDMOTOCYCLEOWNERSHIPSCHEME):
                return "Keke and Motocycle Ownership Scheme";
            case ($schemeId == \App\Schemes::$FINANCIALEMPOWERMENTSCHEME):
                return "Financial Empowerment Scheme";
            default:
                return null;
        }
    }

}
