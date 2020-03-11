<?php

namespace CodingMatters\Account\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Owner extends User
{
    protected $fillable = ['code', 'first_name', 'last_name', 'username', 'password'];
}
