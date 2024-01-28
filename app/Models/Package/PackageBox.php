<?php

namespace App\Models\Package;
use Illuminate\Database\Eloquent\Model;

class PackageBox extends Model

{
    protected $guarded = array();
    protected $table = 'package_box';
     protected $with = ['box'];
   public function box()
    {
        return $this->hasOne('App\Models\Boxes\Boxes','id','box_id');
    }
}

?>

