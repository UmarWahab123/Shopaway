<?php

namespace App\Models\Boxes;
use Illuminate\Database\Eloquent\Model;

class BoxOrder extends Model

{
    protected $guarded = array();
    protected $table = 'box_order';
     protected $with = ['order'];
    
 public function order()
    {
        return $this->hasOne('App\Models\Orders\Orders','id','order_id');
    }
}

?>
