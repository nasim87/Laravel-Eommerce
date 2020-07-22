<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $primaryKey='id';
    protected $fillable=[
        'parent_id',
        'name',
        'image'
    ];
    public function children()
    {
      return $this->hasMany('App\Category', 'parent_id');
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }
    // public function purchase()
    // {
    //     return $this->hasMany('App\Purchase');
    // }
}
