<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends BackendBaseModel
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = ['parent_id','title','rank','route','status','created_by','updated_by'];

    public function subMenus(){
        return $this->hasMany(Menu::class, 'parent_id','id');
    }


}
