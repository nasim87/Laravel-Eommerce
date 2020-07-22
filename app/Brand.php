<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brands';
    protected $primaryKey='id';
    protected $fillable =
                [
                    'name',
                    'image'
                ];
    public function product(){
        return  $this->hasMany('App\Product');
    }
}
