<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table="purchases";
    protected $primaryKey="id";
    protected $fillable=[
        'category_id',
        'name',
        'qty',
        'size',
        'color',
        'mdoel',
        'code',
        'u_price',
        't_price',
        'purchase_date',
        'transport_cost',
        'invoice_no',
        'image',
    ]; 
    public function category()
  {
      return $this->belongsTo('App\Category');
  }
}
