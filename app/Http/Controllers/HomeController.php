<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Orders\Orders;
use App\Models\Shipment\Shipment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function frontend()
    {
        return view('frontend.layout.header');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['users'] = User::get();
        $data['orders'] = Orders::where('type','Order')->get();
        $data['shipments'] = Shipment::get();
        $data['inquiry'] = Orders::where('type','Inquiry')->get();
        return view('dashboard.index',compact('data'));
    }
}
