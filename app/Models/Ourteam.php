<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    use HasFactory;
    protected $table = 'ourteams';
    protected $fillable = ['name','image','designation','facebook','twitter','youtube','instagram'];
    // protected $casts = [
    //     'sociallinks'   =>'array'
    // ];
}
