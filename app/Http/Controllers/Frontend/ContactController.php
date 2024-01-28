<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App;

use App\Models\Contacts\Contact;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Mail;
class ContactController extends Controller
{ 
 public function contact_us()
    {
      return view('frontend.contacts.contacts');
    }
 public function savecontact(Request $request){
        $data = $request->all();
        $action = "Added";
        $affected_rows = Contact::create($data);
        // $this->send_email_test1($request->email,'Welcome to Maxhype','frontend.emails.contacts_email',$data);
         $response = array('response' =>$affected_rows);
        return json_encode($response);
 }
 function send_email_test1($email,$subject,$template,$data)
    {
      Mail::send($template, ['data'=>$data], function($message) use ($subject, $email) {
              $message->to($email,$subject)->subject($subject);
              $message->from('support@themaxhype.com',$subject);
         });
    }
}

?>