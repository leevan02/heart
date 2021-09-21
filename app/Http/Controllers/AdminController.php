<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\user;

use App\models\Course;
class AdminController extends Controller
{

  function index() 
  {
  //   $datas=Course::all(); 
     return view('admin.AdminHome');

  }


  function teacher()
  {
      $datas=user::all();
    return view('admin.teacher',compact('datas'));
  }


   function student()
   {
       $datas=user::all();
     return view('admin.student',compact('datas'));
   }

   function delete($id)
   {
       $user=user::find($id);
       $user->delete();
       return redirect()->back();
   }

   // COURSE FUNCTIONS

   function course()
   {
       $datas=course::all();
     return view('admin.course',compact('datas'));
   }

   function uploadcourse(Request $request)
   {   
     $this->validate($request ,['image'=>'required|mimes:png,jpg,jpeg|max:5048']);


       $datas= new Course;

       $image=$request->image;
        
       $image_name=time().'.'.$request->image->extension();  
     
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

        return redirect()->back();

        
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

        return redirect()->back();
   }



   function deletecourse($id)
   {
       $datas=Course::find($id);
       $datas->delete();
       return redirect()->back();
   }
}
