<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Mail;
class ShipmentController extends Controller
{ 
 public function track_shipment()
  {
   return view('frontend.shipment.track_shipment');
  }
}

?>