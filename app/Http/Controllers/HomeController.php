<?php

namespace App\Http\Controllers;



use App\Models\User;

use App\Models\Saved;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Course;

class HomeController extends Controller
{
  

    
   public function index() 
    { 
        
        $user_id=Auth::id();
        $count=Saved::where('user_id',$user_id)->count();
         $datas=Course::all(); 
        $user=user::all();
       return view('home',compact('datas','user','count'));

    }

   public function CheckRoute() 
    {
        $datas=Course::all();
        $user=user::all();

         $usertype=Auth::User()->usertype;

        if($usertype=='1')
           {
               return view('admin.adminHome');
           }
            else
             {
                $user_id=Auth::id();
                $count=Saved::where('user_id',$user_id)->count();
                 return view('home',compact('datas','user','count'));
             }
    }




   

    public function send_contact(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'phone_number' => 'required',

          'name' => 'required',
          'content' => 'required',
        ]);

        $contact = [
          'subject' => $request->subject,
          'name' => $request->name,
          'phone_number' => $request->phone_number,

          'email' => $request->email,
          'content' => $request->content
        ];

        // Mail::send('emails.contact', $data, function($contact_data) use ($data) {
        //     $contact_data->to($data['email'])
        //     ->subject($data['subject']);
        //   });
        Mail::to('testproject@gmail.com')->send(new ContactMailable($contact));

        return back()->with('success', 'Concern sent');;
    }



   




}
