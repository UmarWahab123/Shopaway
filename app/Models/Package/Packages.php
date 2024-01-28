<?php

namespace App\Models\Package;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model

{
    protected $guarded = array();
    protected $table = 'packages';
     protected $with = ['packageboxes'];
    
   public function packageboxes()
    {
        return $this->hasMany('App\Models\Package\PackageBox', 'package_id');
    }

}

?>

