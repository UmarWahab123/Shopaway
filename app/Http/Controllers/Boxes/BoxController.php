<?php
   namespace App\Http\Controllers\Boxes;
   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App;
   use App\Models\Orders\Orders;
   use App\Models\Boxes\Boxes;
   use App\Models\Boxes\BoxOrder;
   use App\Models\Boxes\BoxOrderItem;
   use App\Http\Requests;
   use Illuminate\Support\Facades\Session;
   use Illuminate\Support\Facades\Auth;
   use QrCode;
   class BoxController extends Controller
   {
    public function boxes()
       {
           $data['page_title'] = "All Boxes";
           $data['results'] =  Boxes::get();
           return view('boxes.index', compact('data'));
       }
    public function boxess($id = -1)
       {
           $data['page_title'] = "Add Box";
           $data['orders'] = Orders::get();
           $boxorders=[];
           $data['orderdata']='';
            if($id != -1) {
               $data['page_title'] = "Update Box";
               $data['results'] = Boxes::with('boxorders')->where('id', $id)->first();
               foreach($data['results']->boxorders as $order) {
                $boxorders[] = $order->order_id;
            }
               $data['orderdata'] = Orders::with('ordersitem')->whereIn('id', $boxorders)->get();
               $orderdata = view('boxes.getorders',compact('data'))->render();
               $data['orderdata'] =$orderdata; 
           }
           return view('boxes.save', compact('data','boxorders'));
       }
     public function saveboxes(Request $request)
       {
           $id = $request->id;
           $data = $request->all();
           $data['box_qr_code'] = QrCode::size(100)->generate(json_encode($data));
           $boxorders = $request->order_id;
           $boxitems = $request->boxitems;
           if(isset($data['order_id'])){
               $orders = $data['order_id'];
               unset($data['order_id']);
           }
           if(isset($data['boxitems'])){
               $orders = $data['boxitems'];
               unset($data['boxitems']);
           }
           $action = "Added";
            if($id){
               $action = "Updated";
               $modal = Boxes::find($id);
               $affected_rows=$modal->update($data);
               
              $old_order=BoxOrder::where('box_id',$id)->get();
               foreach($old_order as $row){
                if(!in_array($row->order_id,$boxorders)){
                    $condition=array('box_id'=>$id,'order_id'=>$row->order_id);
                    BoxOrder::where($condition)->delete();
                }
                if($boxorders){
                foreach($boxorders as $row){
                    $condition=array('box_id'=>$id,'order_id'=>$row);
                    BoxOrder::create($condition);
                }
              }
               $old_item=BoxOrderItem::where('box_id',$id)->get();
               foreach($old_item as $row){
                if(!in_array($row->item_id,$boxitems)){
                    $condition=array('box_id'=>$id,'item_id'=>$row->item_id);
                    BoxOrderItem::where($condition)->delete();
               }
            }
              if($boxitems){
                foreach($boxitems as $row){
                    $condition=array('box_id'=>$id,'item_id'=>$row);
                    BoxOrderItem::create($condition);
                }
              } 
           }
           } 
           else 
           {
            $affected_rows = Boxes::create($data);
             foreach($boxorders as $key => $value) {
               $box_id = $affected_rows->id;
               $data=array('order_id'=>$value,'box_id'=>$box_id);
               BoxOrder::create($data);
               }
              foreach($boxitems as $key => $value) {
               $box_id = $affected_rows->id;
               $data=array('item_id'=>$value,'box_id'=>$box_id);
               BoxOrderItem::create($data);
            }
           }
           $message = set_message($affected_rows,'Boxes',$action);
           Session::put('message', $message);
           return Redirect('/admin/boxes');
       }
     public function deleteboxes($id)
       {
           $affected_rows = Boxes::find($id)->delete();
           $message = set_message($affected_rows,'Boxes','Deleted');
           Session::put('message', $message);
           return Redirect('admin/boxes');
       }
      public function boxmodal($id)
       {
           $data['page_title']="Details";
           $data['boxes'] = Boxes::where('id',$id)->with('boxorders')->first();
           return view('boxes.details',compact('data'));
       }
      public function getorders(Request $request)
       {
         $id=$request->orders_id;
         $data['orderdata'] = Orders::with('ordersitem')->whereIn('id',$id)->get();
         $modal = view('boxes.getorders',compact('data'))->render();
         $response = array('response'=>$modal);
         return json_encode($response);
       }

   }
   ?>