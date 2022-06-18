<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourservices extends Model
{
    use HasFactory;
    protected $tables = 'ourservices';
    protected $fillable =['title','subtitle','icon','description','slug','order','status'];
}
