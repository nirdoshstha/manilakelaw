<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourworks extends Model
{
    use HasFactory;
    protected $table = 'ourworks';
    protected $fillable =['title','image','description','status'];
}
