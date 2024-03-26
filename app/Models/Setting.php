<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_profil',
        'Testimonial_photo1',
        'Testimonial_photo2',
        'Testimonial_photo3',
        'Testimonial_photo4',
        'Contact_photo',
        'logo',
        'banner_About1',
        'banner_About2',
        'banner_Services',
        'banner_Services_Details',
        'banner_Portfolio',
        'banner_blog',
        'banner_Portfolio_details',
       
    ];
}
