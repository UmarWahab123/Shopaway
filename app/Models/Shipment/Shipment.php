<?php

namespace App\Models\Shipment;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model

{
    protected $guarded = array();
    protected $table = 'shipment';
    
   public function shipmentpackages()
    {
        return $this->hasMany('App\Models\Shipment\ShipmentPackage','shipment_id');
    }

}

?>

