<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Saved extends Model
{
    use HasFactory;
    protected $table = 'saveds';

    protected $fillable =[
        'user_id',
        
        'course_id',];



        public function user(){
          return $this->belongsTo(User::class);
       }
        public function course()
        {
           return $this->belongsTo(Course::class,'course_id','id');

        }
}
