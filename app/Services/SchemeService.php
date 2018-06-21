<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- SchemeService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to schemes.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class SchemeService {

    /**
     * 
     * This method is responsible for confirming the validity of a Scheme i.e 
     * if the id given actually belongs to an existent Scheme defined in the 
     * /App/Schemes.php class.
     * 
     * @param int $schemeId | the scheme id in question.
     * 
     * @return boolean.
     * 
     */
    public function confirmSchemeValidity($schemeId) {
        switch ($schemeId) {
            case ($schemeId == \App\Schemes::$HOUSEOWNERSHIPSCHEME):
                return true;
            case ($schemeId == \App\Schemes::$KEKEANDMOTOCYCLEOWNERSHIPSCHEME):
                return true;
            case ($schemeId == \App\Schemes::$FINANCIALEMPOWERMENTSCHEME):
                return true;

            default:
                return false;
        }
    }
    
    
    /**
     * 
     * This method is responsible for returning the scheme that a number repre-
     * sents.
     * 
     * @param int $schemeId | the scheme id which is the number in question.
     * 
     * @return String | the scheme.
     * 
     */
    public function determineScheme($schemeId){
        switch($schemeId){
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
