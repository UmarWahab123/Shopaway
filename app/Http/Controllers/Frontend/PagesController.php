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

class PagesController extends Controller

{ 
 public function service_fee()
    {
    	return view('frontend.menu.service_fee');
    }
 public function faq()
    {
      return view('frontend.menu.faq');
    }
 public function contact_us()
    {
      return view('frontend.menu.contacts');
    }
  public function about_us()
    {
      return view('frontend.menu.about');
    }
 public function howitworks()
  {
   return view('frontend.menu.howitworks');
  }
 public function topstore()
  {
   return view('frontend.buyforme.topstore');
  }

}

?>