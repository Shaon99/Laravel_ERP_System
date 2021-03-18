<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{
    //use HasFactory;

    protected $table = 'hr_manager';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
}
