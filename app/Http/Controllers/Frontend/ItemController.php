<?php
   namespace App\Http\Controllers\Frontend;
   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App;
   use App\Models\Orders\Orders;
   use App\Models\Orders\OrdersItem;
   use App\Http\Requests;
   use Illuminate\Support\Facades\Session;
   use Illuminate\Support\Facades\Auth;
   class ItemController extends Controller
   {
       public  function item()
       {
           $data['page_title'] = "All Orders";
           $data['results'] =  Orders::get();
           return view('frontend.item.save', compact('data'));
       }
       public function saveitem(Request $request)
       {
           $id = $request->id;
           $data = $request->all();
           unset($data['file']);
           $item = $request->item;
           $item  = [];
           $olditem=[];
           $removed_entries=[];
           // $item=$data['item'];
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
           $message=   set_message($affected_rows,'Orders',$action);
           Session::put('message', $message);
           return Redirect('/admin/customer');
       }

   }
   ?>