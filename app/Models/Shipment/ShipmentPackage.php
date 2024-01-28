<?php

namespace App\Models\Shipment;
use Illuminate\Database\Eloquent\Model;
class ShipmentPackage extends Model
{
    protected $guarded = array();
    protected $table = 'shipment_package';
    protected $with = ['package'];
   public function package()
    {
        return $this->hasOne('App\Models\Package\Packages','id','package_id');
    }

 
}

?>

