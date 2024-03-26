<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'photo',
        'icon',
        'text',
        'title_Golobale',
        'user_id',
    ];

    public function user(){ 
         
        return $this->belongsTo(User::class);

    }
}
