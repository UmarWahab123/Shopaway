<?php
   namespace App\Http\Controllers\Packages;
   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App;
   use App\Models\Boxes\Boxes;
   use App\Models\Package\Packages;
   use App\Models\Package\PackageBox;
   use App\Http\Requests;
   use Illuminate\Support\Facades\Session;
   use Illuminate\Support\Facades\Auth;
   use QrCode;
   class PackageController extends Controller
   {
    public  function package()
       {
           $data['page_title'] = "All Packages";
           $data['results'] =  Packages::get();
           return view('packages.index', compact('data'));
       }
    public  function packages($id = -1)
       {
          
           $data['page_title'] = "Add Packages";
           $data['boxes'] = Boxes::get();
           $packageboxes=[];
           if($id != -1) {
               $data['page_title'] = "Update Packages";
               $data['results'] = Packages::with('packageboxes')->where('id', $id)->first();
               foreach($data['results']->packageboxes as $box) {
                $packageboxes[] = $box->box_id;
            }
           }
           // dd($orders);
           return view('packages.save', compact('data','packageboxes'));
       }
     public function savepackages(Request $request)
       {
           $id = $request->id;
           $data = $request->all();
           $data['package_qr_code'] = QrCode::size(100)->generate(json_encode($data));
           $boxes = $request->box_id;
           if(isset($data['box_id'])){
               $boxes = $data['box_id'];
               unset($data['box_id']);
           }
           $action = "Added";
           if($id){
               $action = "Updated";
               $modal = Packages::find($id);
               $affected_rows=$modal->update($data);
               
              $old_box=PackageBox::where('package_id',$id)->get();
               foreach($old_box as $row){
                if(!in_array($row->box_id,$boxes)){
                    $condition=array('package_id'=>$id,'box_id'=>$row->box_id);
                    PackageBox::where($condition)->delete();
                }
                if($boxes){
                foreach($boxes as $row){
                    $condition=array('package_id'=>$id,'box_id'=>$row);
                    PackageBox::create($condition);
                }
              }
            } 
           } 
           else 
           {
            $affected_rows =  Packages::create($data);
               foreach($boxes as $key => $value) {
                   $package_id = $affected_rows->id;
                   $data=array('box_id'=>$value,'package_id'=>$package_id);
                   PackageBox::create($data);
               }
           }
           $message = set_message($affected_rows,'Package',$action);
           Session::put('message', $message);
           return Redirect('/admin/package');
       }
      public function deletpackage($id)
       {
           $affected_rows = Packages::find($id)->delete();
           $message = set_message($affected_rows,'Package','Deleted');
           Session::put('message', $message);
           return Redirect('admin/package');
       }
      public function packagemodal($id)
       {
           $data['page_title']="Details";
           $data['package'] = Packages::where('id',$id)->with('packageboxes')->first();
           return view('packages.details',compact('data'));
       }
   }
   ?>