<?php

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'slug', 'content'];
    // protected $fillable = ['nom', 'email', 'password'];
}
