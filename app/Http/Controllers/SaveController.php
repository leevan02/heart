<?php

namespace App\Http\Controllers;

use AppSaved;
use Notification;
use App\Models\User;
use App\Models\Saved;
use App\Models\Course;
use App\Mail\ApplyMail;
use App\Models\Applies;
use App\Mail\ApplyMailable;
use App\Notifications\apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class SaveController extends Controller
{
    public function __construct()
    { 
        $this->middleware(['auth']);

    }
    public function save(Request $request,Course $course)
    {
        if(Auth::check())

        {  
            
            $check=Saved::where('user_id',Auth::user()->id)
            ->where('course_id',$request->course_id)
            ->first();

            // $course_id=$request->input('course_id');
            
            if(isset($check->user_id) and isset($request->course_id))
                {
                    alert()->info('Already saved','check your saved list.');

                    return redirect()->back();
                    
                
                }
             else
                {
                    
                    $save= new Saved();
                    $save->user_id= Auth::id();
                    $save->course_id=$request->course_id;
                    $save->save();
                    return redirect()->back()
                    ->with('success', 'Created successfully!');                }

        }

                else
                {
                    return redirect('/login');
                }
    }



    public function showsave()
    {
        $count=Saved::where('user_id',Auth::id())->count();


       

        $dataz = Saved::where('user_id', Auth::id())->get();
        $user = Auth::user();

        // $dataz = Saved::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(5);


         return view('showsave',compact('count','dataz'));
    }


    




   public function remove($id)
   {
    
     if(Auth::check())
     {
        


          $datas=Saved::find($id);
             $datas->delete();
             toast('Successfully deleted','success');

             return redirect()->back();

         

     }


       return redirect()->back();

   }



   public function apply($id)
   {
       
    $check=Applies::where('user_id',Auth::user()->id)
            // ->where('course_id',$id)
            // ->first()
            ;
    // if(isset($check->user_id) and isset($id))
    //      {
    //                 
    //          return redirect()->back();
    //          
    //      
    //      }
    //        else
    //      {

            $dataz = Saved::where('id',$id)->get();
            // $course=Course::all();
            $user = Auth::user();
             alert()->info('Already applied','check your my course.');

            return view('apply',compact('dataz'));
        // }
}




   public function applied(Request $request)
   {

    $user=Auth::id();
//   $course_id=$request->input('course_id');

    $this->validate($request ,['pimage'=>'required|mimes:png,jpg,jpeg|max:5048']);
     $this->validate($request ,['qualification'=>'required|file|max:5000|mimes:pdf,docx,doc']);

  


   $applied = new Applies;

    
    $applied->user_id=$user;
    // $applied->course_id=$course_id;
    $image=$request->pimage;
    $image_name=time().'.'.$image->getClientOriginalExtension();  
    $request->pimage->move('applicantP', $image_name);
    $applied->pimage=$image_name;

    $applied->fname=$request->fname;
    $applied->lname=$request->lname;
    $applied->email=$request->email;
    $applied->gender=$request->gender;
    $applied->address=$request->address;
    $applied->address2=$request->address2;
    $applied->address3=$request->address3;
    $applied->address4=$request->address4;
    $applied->address5=$request->address5;

    $qualification=$request->qualification;
    $qualification_name=time().'.'.$qualification->getClientOriginalExtension();  
    $request->qualification->move('applicantQ', $qualification_name);
    $applied->qualification=$qualification_name;

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


   

    $details = [
        'email' => $request->input('email'),
        
    ]; 

   if($applied->save())
   {
       Mail::to($details['email'])->send(new ApplyMailable);
   return redirect(url('/')) ->with('success', 'Thank for applying');
   }
   

    
    

 }













       public function mycourse(Request $request,$id)
       {
           $count=Saved::where('user_id',$id)->count();
   
           // $dataz=Saved::where('user_id',$id)
           //             ->join('courses','courses.id','=','saveds.course_id')->get();
   
           $dataz=Saved::where('user_id',Auth::id())->get();
   
            return view('student.my-course',compact('count','dataz'));
       }

}
