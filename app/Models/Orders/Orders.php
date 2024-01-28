<?php

namespace App\Models\Orders;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model

{
    protected $guarded = array();
    protected $table = 'orders';
     protected $with = ['ordersitem'];
    
    public function ordersitem()
     {
      return $this->hasMany('App\Models\Orders\OrdersItem', 'orders_id');
     }

}

?>

