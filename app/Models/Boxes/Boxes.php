<?php

namespace App\Models\Boxes;
use Illuminate\Database\Eloquent\Model;

class Boxes extends Model

{
    protected $guarded = array();
    protected $table = 'boxes';
     protected $with = ['boxorders'];

    public function boxorders()
        {
          return $this->hasMany('App\Models\Boxes\BoxOrder', 'box_id');
        }


}

?>

