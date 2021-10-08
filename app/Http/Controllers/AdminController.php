<?php

namespace App\Http\Controllers;

use App\models\user;

use App\Models\Course;

use App\Models\Applies;
use App\Mail\deniedMailable;
use Illuminate\Http\Request;
use App\Mail\ApprovedMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
  public function __construct()
    { 
        $this->middleware(['auth']);

    }

  

  function index() 
  {
     $datas=Course::all(); 
     return view('admin.adminHome');

  }


  function teacher()
  {
      $datas=User::all();
    return view('admin.teacher',compact('datas'));
  }


   function student()
   {
       $datas=User::all();
     return view('admin.student',compact('datas'));
   }

   function delete($id)
   {
       $user=User::find($id);
       $user->delete();
       return redirect()->back()->with('message','User have been deleted successfully');
   }

   // COURSE FUNCTIONS

   function course()
   {
       $datas=Course::all();
     return view('admin.course',compact('datas'));
   }

   function addcourse()
   {
       
     return view('admin.addcourse');
   }

   function uploadcourse(Request $request)
   {   
     $this->validate($request ,['image'=>'required|mimes:png,jpg,jpeg|max:5048']);


       $datas= new Course;

       $image=$request->image;
        
       $image_name=time().'.'.$image->getClientOriginalExtension();  
     
       $request->image->move('courseimage', $image_name);
 
        $datas->image=$image_name;

        $datas->title=$request->title;

        $datas->teacher=$request->teacher;

        $datas->certiDegree=$request->certiDegree;

        $datas->schedule=$request->schedule	;

        $datas->status=$request->status;

        $datas->price=$request->price;       
        
        $datas->description=$request->description;

        $datas->save();

        return redirect(url('course'))->with('message','Course added successfully');

        
   }

   function editcourse($id)
   {
       $datas=Course::find($id);
       
       return view('admin.editcourse',compact('datas'));
   }

   
   function edit(Request $request, $id)
   {
       $datas=Course::find($id);
       
      //  $this->validate($request ,['image'=>'required|mimes:png,jpg,jpeg|max:5048']);

    // 		$filename = time() . '.' . $photo->;

      if($request->hasFile('image')){

        $image=$request->file('image');
        
       $image_name=time().'.'.$image->getClientOriginalExtension();  
     
       $request->image->move('courseimage', $image_name);
 
        $datas->image=$image_name;
      }

       

        $datas->title=$request->title;

        $datas->teacher=$request->teacher;

        $datas->certiDegree=$request->certiDegree;

        $datas->schedule=$request->schedule	;

        $datas->status=$request->status;

        $datas->price=$request->price;       
        
        $datas->description=$request->description;

        $datas->save();

        return redirect(url('course'))->with('message','Course edited successfully');
   }



   function deletecourse($id)
   {
       $datas=Course::find($id);
       $datas->delete();
       return redirect()->back()->with('message','Course deleted successfully');
      }




   function applicant()
   {
       $dataz=Applies::all();

     return view('admin.applicant',compact('dataz'));
   }



  //  function approve_applicant($id)
  //  {
  //      $approve=Applies::find($id);
  //    return view('admin.update_applicant',compact('approve'));
  //  }



   function approved_applicant(Request $request ,$id)
   {

       $approved=Applies::find($id);

       $approved->status=$request->status;

       $approved->email=$request->email;

       $details = [
        'email' => $request->input('email'),
        
        ]; 

    $approved->save();

    if($approved->status=='active')
    {
          Mail::to($details['email'])->send(new ApprovedMailable);

    }
    elseif($approved->status=='denied')
    {
      Mail::to($details['email'])->send(new deniedMailable);

    }

     return redirect()->back();
   }





   public function delete_applicant($id)
   {
    
     if(Auth::check())
     {
        


          $datas=Applies::find($id);
             $datas->delete();
             toast('Successfully deleted','success');

             return redirect()->back();

         

     }


       return redirect()->back();

   }




   
}
