<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'Members';

    protected $fillable = [
      'member_id', 'full_name', 'phone', 'email', 'location',
      'date_of_birth', 'gender', 'teller_id', 'transaction_id',
      'approved_status', 'reviewed_status', 'user_id', 'refered_by'
    ];
    
    public function user(){
        return User::find($this->user_id);
    }
}
