<?php

namespace App\Http\Controllers;

use App\Models\Saved;
use App\Models\Course;
use App\Models\Applies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
   public function __construct()
   { 
       $this->middleware(['auth']);

   }


   public function my_course($id)
   {
      $count=Saved::where('user_id',$id)->count();
      $applies = Applies::where('user_id', Auth::id())->get();
      $applies1 = Applies::where('id',$id)->where('user_id', Auth::id())->get();
      $status = Applies::find($id);


       return view('student.my_course',compact('count','applies','applies1','status'));
   }



   public function view_application($id)
   {
      // $application = Applies::where('id',$id)->get();
      $application = Applies::find($id);

       return view('student.view_application',compact('application'));
   }




   public function edit_application($id)
   {
      $application = Applies::find($id);
      // $course=Course::all();


      return view('student.edit_application', compact('application'));
      
   }


   



   public function edited_application(Request $request,$id)
   {
      $applied =Applies::find($id);


      $user=Auth::id();


      if($request->hasFile('pimage')){

         $image=$request->file('pimage');
         
        $image_name=time().'.'.$image->getClientOriginalExtension();  
      
        $request->pimage->move('applicantP', $image_name);
  
         $applied->pimage=$image_name;
       }
      
       if($request->hasFile('qualification')){

         $qual=$request->file('qualification');
         
        $qual_name=time().'.'.$qual->getClientOriginalExtension();  
      
        $request->qualification->move('applicantQ', $qual_name);
  
         $applied->qualification=$qual_name;
       }
         //  $course_id=$request->input('course_id');

    
       
    
        
        $applied->user_id=$user;
      //   $applied->course_id=$course_id;
      
        $applied->fname=$request->fname;
        $applied->lname=$request->lname;
        $applied->email=$request->email;
        $applied->gender=$request->gender;
        $applied->address=$request->address;
        $applied->address2=$request->address2;
        $applied->address3=$request->address3;
        $applied->address4=$request->address4;
        $applied->address5=$request->address5;
    
      
    
        $applied->school=$request->school;
        $applied->certi=$request->certi;
        $applied->year=$request->year;
        $applied->price=$request->price;
        $applied->card=$request->card;
        $applied->cvc=$request->cvc;
        $applied->expire=$request->expire;
        $applied->card_holder=$request->card_holder;
    
        $applied->course=$request->course;
        $applied->price=$request->price;
        $applied->status=$request->status;
    
    
        $applied->save();
        return view('home')->with('message','Application edited successfully');

   }


   public function remove_application($id)
   {
      
         
 
 
           $application=Applies::find($id);
              $application->delete();
              toast('Successfully deleted','success');
 
              return redirect()->back();
 
          
 
 
 
        
 
    }
   







   
}
