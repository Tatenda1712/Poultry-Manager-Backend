<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class poultry extends Authenticatable
{
    use HasFactory;
    protected $hidden = ['password'];
    protected $guard = 'poultry';
    protected $fillable=['fname','lname','phone','email','password'];
}
