<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eggs extends Model
{
    use HasFactory;
    protected $fillable=['batch_name','quantity','farmerid'];
}
