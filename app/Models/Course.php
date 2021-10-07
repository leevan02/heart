<?php

namespace App\Models;

use App\Models\Saved;
// use App\Models\Course;
use App\Models\Applies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable =[
        'title',
        'image',
        'description',
        'teacher',
        'schedule',
        'status',
        'certiDegree',
        'price',
        ];

        public function saveds()
        {
            return $this->hasMany(Saved::class);
         }
         public function applies()
         {
             return $this->hasMany(Applies::class);
          }
    
}
