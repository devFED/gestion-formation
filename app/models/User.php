<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nom', 'email', 'password'];
}
