<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLesson extends Model
{
    use HasFactory;
    protected $table = 'wp_typeinglessons_userlesson';
    protected $fillable = [
        'user_id',
        'lessonpart_id',	
        'lesson_id',	
        'course_id',	
        'error',	
        'wpm',	
        'accuracy',	
        'totalduration',	
        'cdatetimestamp',	
        'cdate',	
    ];
}
