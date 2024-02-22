<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;
    protected $table = 'wp_typeinglessons_email_templates';
    protected $fillable = [
        'configkey',
        'value',	
        'type_name',	
        'type_slug',	
        'title',	
        'description',	
        'email_subject',	
        'email_body',	
    ];
    public $timestamps = false;
}

