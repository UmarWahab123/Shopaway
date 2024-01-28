<?php
   namespace App\Http\Controllers\Orders;
   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App;
   use App\Models\Orders\Orders;
   use App\Models\Orders\OrdersItem;
   use App\Http\Requests;
   use Illuminate\Support\Facades\Session;
   use Illuminate\Support\Facades\Auth;
   use QrCode;

   class OrderController extends Controller
   {
       public  function order()
       {
           $data['page_title'] = "All Orders";
           $data['results'] =  Orders::where('type','Order')->get();
           return view('orders.index', compact('data'));
       }
       public  function orders($id = -1)
       {
           $data['page_title'] = "Add Orders";
           if ($id != -1) {
               $data['page_title'] = "Update Orders";
               $data['results'] = Orders::where('id', $id)->first();
               $data['item'] = OrdersItem::where('orders_id',$data['results']->id)->get();
           }
           return view('orders.save', compact('data'));
       }
       public function saveorder(Request $request)
       {
           $id = $request->id;
           $data = $request->all();
           $random = hexdec(uniqid());
           $data['order_number']=substr($random, 0, 8);
           $data['order_qr_code'] = QrCode::size(100)->generate(json_encode($data));
           $item = $request->item;
           $item  = [];
           $olditem=[];
           $removed_entries=[];
           if(isset($data['item'])){
               $item = $data['item'];
               unset($data['item']);
           }
           if(isset($data['olditem'])) {
               $olditem = $data['olditem'];
               unset($data['olditem']);
           }
           if(isset($data['removed_entries'])) {
               $removed_entries = $data['removed_entries'];
               unset($data['removed_entries']);
           }
           $action = "Added";
           if($id){
               $action = "Updated";
               $modal = Orders::find($id);
               $affected_rows=$modal->update($data);
               foreach ($olditem as $key => $value) {
                   $value['orders_id'] = $modal->id;
                   OrdersItem::where('id', $value['id'])->update($value) ;
               }
               foreach ($item as $key => $value) {
                   if(!empty($value['id']))
                   {
                       OrdersItem::where('id',$value['id'])->update($value);
                   }
                   else
                   {
                       $value['orders_id'] = $modal->id;
                       OrdersItem::create($value);
                   }   
               }
           } 
           else 
           {
               $affected_rows =  Orders::create($data);
               foreach ($item as $key => $value) {
                   $value['orders_id'] = $affected_rows->id;
                   OrdersItem::create($value);
               }
           }
           if(!empty($removed_entries)){
             OrdersItem::where('id',$removed_entries)->delete();
           }
           $message =   set_message($affected_rows,'Orders',$action);
           Session::put('message', $message);
           return Redirect('/admin/order');
       }
       public function deleteorder($id)
       {
           $affected_rows = Orders::find($id)->delete();
           $message = set_message($affected_rows,'Customer','Deleted');
           Session::put('message', $message);
           return Redirect('admin/order');
       }
       public function ordermodal($id)
       {
           $data['page_title']="Details";
           $data['orders'] = Orders::where('id',$id)->first();
           $data['orders_item'] = OrdersItem::where('orders_id',$id)->get();
         return view('orders.details',compact('data'));
       }
     public  function inquiry()
       {
           $data['page_title'] = "All Inquiry";
           $data['results'] =  Orders::where('type','Inquiry')->get();
           return view('orders.inquiry', compact('data'));
       }
       public function upload_file(Request $request)
       {
           $path=$_GET['url'];
           $path = str_replace('-', '/', $path);
           if ( !empty( $_FILES ) ) {
               $date = new \DateTime();
               $current_dir=str_replace('uploads','',getcwd());
               $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];
               $name=str_replace(' ', '', $_FILES['file']['name']);
               $filename=$date->getTimestamp().'-'. $name;
               //  $filename=$name;
               $uploadPath = $current_dir.$path. DIRECTORY_SEPARATOR .$filename;
               //  print_r($uploadPath); exit;
               move_uploaded_file( $tempPath, $uploadPath );
               $answer = array( 'answer' => 'File transfer completed' );
               $json = json_encode( $answer );
               $newFileName = $path.'/'.$filename;
               echo $newFileName;
           } else {
               echo 'No files';
           }
       }
      

   }
   ?>