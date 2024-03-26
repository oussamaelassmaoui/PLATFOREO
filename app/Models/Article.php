<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'text1',
        'text2',
        'text_motivation',
        'text3',
        'photo1',
        'image',
        'photo3',
        'user_id',
        'Categorie_id',
        'status',
    ];
    
    public function categorie(){ 
        
        return $this->belongsTo(Categorie::class , 'Categorie_id');

    }

    public function user(){ 
         
        return $this->belongsTo(User::class);

    }
}
