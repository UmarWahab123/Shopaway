<?php
   namespace App\Http\Controllers\Shipment;
   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App;
   use App\Models\Package\Packages;
   use App\Models\Shipment\Shipment;
   use App\Models\Shipment\ShipmentPackage;
   use App\Http\Requests;
   use Illuminate\Support\Facades\Session;
   use Illuminate\Support\Facades\Auth;
   use QrCode;
   class ShipmentController extends Controller
   {
    public  function shipment()
       {
           $data['page_title'] = "All Shipment";
           $data['results'] =  Shipment::get();
           return view('shipment.index', compact('data'));
       }
    public  function shipments($id = -1)
       {
          $data['page_title'] = "Add Shipment";
           $data['packages'] = Packages::get();
           $shipmentpackages = [];
           if($id != -1) {
               $data['page_title'] = "Update Shipment";
               $data['results'] = Shipment::with('shipmentpackages')->where('id', $id)->first();
               foreach($data['results']->shipmentpackages as $package) {
                $shipmentpackages[] = $package->package_id;
            }
           }
           return view('shipment.save', compact('data','shipmentpackages'));
       }
     public function saveshipment(Request $request)
       {
           $id = $request->id;
           $data = $request->all();
           $data['departure_date'] = db_format_date($request->departure_date);
           $data['arrival_date'] = db_format_date($request->arrival_date);
           $data['shipment_qr_code'] = QrCode::size(100)->generate(json_encode($data));
           $packages = $request->package_id;
           if(isset($data['package_id'])){
               $packages = $data['package_id'];
               unset($data['package_id']);
           }
           $action = "Added";
           if($id){
               $action = "Updated";
               $modal = Shipment::find($id);
               $affected_rows=$modal->update($data);
              $old_package=ShipmentPackage::where('shipment_id',$id)->get();
               foreach($old_package as $row){
                if(!in_array($row->package_id,$packages)){
                    $condition=array('shipment_id'=>$id,'package_id'=>$row->package_id);
                    ShipmentPackage::where($condition)->delete();
                }
                if($packages){
                foreach($packages as $row){
                    $condition=array('shipment_id'=>$id,'package_id'=>$row);
                    ShipmentPackage::create($condition);
                }
              }
            } 
           }
           else 
           {
            $affected_rows = Shipment::create($data);
               foreach($packages as $key => $value) {
                   $shipment_id = $affected_rows->id;
                   $data=array('package_id'=>$value,'shipment_id'=>$shipment_id);
                   ShipmentPackage::create($data);
               }
           }
           $message = set_message($affected_rows,'Shipment',$action);
           Session::put('message', $message);
           return Redirect('/admin/shipment');
       }
     public function deletshipment($id)
       {
           $affected_rows = Shipment::find($id)->delete();
           $message = set_message($affected_rows,'Shipment','Deleted');
           Session::put('message', $message);
           return Redirect('admin/shipment');
       }
      public function shipmentmodal($id)
       {    
           $data['page_title']="Details";
           $data['shipment'] = Shipment::where('id',$id)->with('shipmentpackages')->first();
           return view('shipment.details',compact('data'));
       }
   }
   ?>