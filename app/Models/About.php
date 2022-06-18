<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends BackendBaseModel
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['title','subtitle','image','description','seo_title','seo_desc','seo_keyword','slug','status','created_by','updated_by'];


}
