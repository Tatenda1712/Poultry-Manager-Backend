<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feeds extends Model
{
    use HasFactory;
    protected $fillable=['batch_name','cost','purpose','quantity'];
}
