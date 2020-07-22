<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable = [
        'user_id',
        'product_id',
        'order_number',
        'status',
    ];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
