<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'photo',
        'Mobile',
        'work',
        'About_Me',
        'instagram',
        'Linkedin',
        'Github',
        'Twitter',
        'Facebook',
       
        'Years_of_Experience',
    ];
}
