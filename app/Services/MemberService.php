<?php

namespace App\Services;

/**
 * |----------------------------------------------------------------------------
 * |------------------------- MemberService Class ------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is responsible for handling operations regarding to member's
 * | account.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class MemberService {

    private $portfolioService;

    public function __construct(\App\Services\PortfolioService $portfolioService) {
        $this->portfolioService = $portfolioService;
    }

    /**
     * 
     * This method is responsible for creating a new member.
     * 
     * @param type $fullName |the full name of the member to be created.
     * @param type $phone | the phone number of the member.
     * @param type $email | the email of the member.
     * @param type $location | the location of the member.
     * @param type $dateOfBirth | the date of birth of the memeber.
     * @param type $gender | the gender of the member.
     * @param type $approvalStatus | the approval status of this member to be 
     *   created.
     * @param type $disapprovedStatus | the review status of this member to be 
     *   created.
     * @param type $userId | the id of the corresponding user record of this 
     *   user.
     * 
     * @return \App\Member
     * 
     */
    public function createMemberIfMemberDoesNotExist($fullName, $phone, $email,
            $location, $dateOfBirth, $gender, $approvalStatus, $disapprovedStatus, $userId) {
        $member = $this->getMemberByUserId($userId);
        if ($member == null) {
            return \App\Member::create([
                        'full_name' => $fullName,
                        'phone' => $phone,
                        'email' => $email,
                        'location' => $location,
                        'date_of_birth' => $dateOfBirth,
                        'approved_status' => $approvalStatus,
                        'disapproved_status' => $disapprovedStatus,
                        'gender' => $gender,
                        'user_id' => $userId,
            ]);
        }
        return $member;
    }

    /**
     * 
     * This method is responsible for retrieving a member record by his/her user
     * id i.e the corresponding id in the user table.
     * 
     * @param type $userId | the user id criteria.
     * 
     * @return App\User.
     * 
     */
    public function getMemberByUserId($userId) {
        $user = \App\User::find($userId);
        if ($user != null) {
            $member = \App\Member::where('user_id', '=', $userId)->get();
            return (count($member) > 0) ? $member->get(0) : null;
        }
        return null;
    }

    /**
     * 
     * This method is responsible for retrieving a paginated collection of 
     * all members that are not approved and has not yet been reviewed
     * i.e disapproved.
     * 
     * @param limit | how many records to be returned per page.
     * 
     * @return array collection of members.
     * 
     */
    public function getAllUnApprovedAndUnReviewedMembers($limit = 15) {
        return \App\Member::where('approved_status', '=', false)
                        ->where('reviewed_status', '=', false)->paginate($limit);
    }

    /**
     * 
     * This method is responsible for retrieving a paginated collection of all
     * members that are approved and has been reviewed.
     * 
     * @param type $limit | how many records to be returned per page.
     * 
     * @return array collection of members
     * 
     */
    public function getAllApprovedAndReviewedMembers($limit = 15) {
        return \App\Member::where('approved_status', '=', true)
                        ->where('disapproved_status', '=', false)->paginate($limit);
    }

    /**
     * 
     * This method is responsible for retrieving a Member by it's id.
     * 
     * @param type $id | the id of the member to be retrieved.
     * 
     * @return Member.
     * 
     */
    public function getMemberById($id) {
        return \App\Member::find($id);
    }

    /**
     * 
     * This method is responsible for approving a member
     * 
     * @param App\Member $member | the member to approve.
     * @param int $userId | the id of the user doing the approval.
     * @param $newPassword | the new password for the member being approved
     * 
     * @return Member.
     * 
     */
    public function approveMember(\App\Member $member, $userId, $newPassword) {
        if ($member != null) {
            $member->approved_status = true;
            $member->disapproved_status = false;
            $member->approved_by = $userId;
            $user = \App\User::find($member->user_id);
            if ($user == null) {
                return null;
            }
            $user->password = bcrypt($newPassword);
            $this->sendMemberApprovalConfirmation($user, $newPassword);
            return ($member->save() && $user->save()) ? $member : null;
        }
        return null;
    }
    
    /**
     * 
     * This method is responsible for approving a member if the member has not
     * been approved before.
     * 
     * @param App\Member $member | the member to approve.
     * @param int $userId | the id of the user doing the approval.
     * @param $newPassword | the new password for the member being approved.
     * 
     * @return Member.
     * 
     */
    public function approveMemberIfNotYetApproved(\App\Member $member, $userId, $newPassword){
        if($member != null && $member->approved_status == false){
            return $this->approveMember($member, $userId, $newPassword);
        }
        return $member;
    }
    
    
    
    /**
     * 
     * This method is responsible for disapproving a member.
     * 
     * @param App\Member $member | the member to disapprove.
     * @parm int $userId | the id of the user doing the disapproval.
     * 
     * @return Member.
     * 
     */
    public function disapproveMember(\App\Member $member, $userId) {
        if ($member != null) {
            $member->approved_status = false;
            $member->reviewed_status = true;
            $member->disapproved_by = $userId;
            return ($member->save()) ? $member : null;
        }
        return null;
    }

    /**
     * 
     * This method is responsible for sending a member approval confirmation 
     * email to a member that has been approved.
     * 
     * @param App\User $user | the member to receive the email.
     * @param $password | the un-hashed password of the user.
     * 
     */
    public function sendMemberApprovalConfirmation(\App\User $user, $password) {
        if ($user != null) {
            \Illuminate\Support\Facades\Mail::to($user->email)
                    ->queue(new \App\Mail\MemberApprovalConfirmationMail($user->email, $password, $user->name));
        }
    }

}
