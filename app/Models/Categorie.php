<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
       
    ];
    
    
    public function blog(){
        return $this->hasMany(Article::class);
    }
    public function project(){
        return $this->hasMany(project::class);
    }
}
