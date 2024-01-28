@foreach($data['orderdata'] as $key=>$value)
   <h4><b>Order# : </b>{{$value->order_number}}</h4>
@foreach($value->ordersitem as $key2=>$value2)
 <p><input type="checkbox" name="boxitems[]" {{checked_item($value2->id)}} value="{{$value2->id}}"> {{$value2->goods_name}}</p>
@endforeach
@endforeach
    