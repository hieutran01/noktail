<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLessonPass extends Model
{
    use HasFactory;
    protected $table = 'wp_typeinglessons_userlessonpass';
    protected $fillable = [
        'spm',
        'kerror',
        'userid',
        'lesson_id',
    ];

    // Nếu bạn muốn sử dụng timestamps (created_at, updated_at)
    public $timestamps = false;

}
