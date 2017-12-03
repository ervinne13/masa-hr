<?php

namespace App\Models;

use App\User;

class UserAccount extends User
{

    public $incrementing  = false;
    protected $primaryKey = 'username';

}
