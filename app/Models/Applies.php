<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applies extends Model
{
    use HasFactory;
  protected $table='applies';
    // protected $fillable = [
    //     'user_id',  'fname',  'lname',

    //     'email',   'gender',	'course',

    //     'class',	'address',

    //     'address2',	'address3',	'address4',	

    //      'address5',
    //     	'qualification', 
    //    'school',	

    //     'certi', 'yeear', 'price',	

    //     'card',	'cvc	expire',	

    //     'card_holder',	'cash',
        
    // ];

    public function user(){
      return $this->belongsTo(User::class);
   }
    public function course()
    {
       return $this->belongsTo(Course::class,'course_id','id');

    }
}
