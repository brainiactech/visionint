<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- UserService Class -----------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to user
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class UserService {
   
    /**
     * 
     * This method is responsible for activating a user account
     * 
     * @param \App\User $user | the user to be activated.
     * 
     * @return boolean
     * 
     */
    public function activateUser($user){
        if($user != null){
            $user->is_deactivate = false;
            return $user->save();
        }
        return false;
    }
    
    /**
     * 
     * This method is responsible for deactivating a user account
     * 
     * @param \App\User $user | the user to be deactivated
     * 
     * @return boolean.
     * 
     */
    public function deactivateUser($user){
        if($user != null){
            $user->is_deactivate = true;
            return $user->save();
        }
        return false;
    }
    
    /**
     * 
     * This method is responsible for changing a user's password.
     * 
     * @param type $user | the user whose password to be changed.
     * @param type $password | the new password for the user.
     * 
     * @return boolean | boolean value depicting the status of the operation.
     * 
     */
    public function changeUserPassword($user, $password){
        if($user != null){
            $user->password = bcrypt($password);
            return $user->save();
        }
        return false;
    }
}
