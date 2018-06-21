<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- StartingClassService Class -----------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to starting
 * | classes.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class StartingClassService {
    
    /**
     * 
     * This method is responsible for checking the is the startingClass specified
     * is a valid starting class.
     * 
     * @param int $startingClassId | the id in question.
     * 
     * @return boolean
     * 
     */
    public function confirmStartingClassValidity($startingClassId){
        switch ($startingClassId) {
            case ($startingClassId == \App\StartingClasses::$CLASSIC):
                return true;
            case ($startingClassId == \App\StartingClasses::$PREMIUM):
                return true;
            case ($startingClassId == \App\StartingClasses::$PLATINUM):
                return true;
            default:
                return false;
        }
    }
    
}
