<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flock extends Model
{
    use HasFactory;
    protected $fillable=['batch_name','purpose','quantity'];
}
