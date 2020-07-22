<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'quantity',
        'code',
        'model',
        'r_price',
        'price',
        'description',
        'specification',
        'category_id',
        'brand_id',
        'images',
        'color'
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand','brand_id');
    }
    public function order()
    {
        return $this->hasOne('App\Order');
    }
    public function presentPrice()
    {
        return number_format($this->price / 100,2,',','');
    }

}
