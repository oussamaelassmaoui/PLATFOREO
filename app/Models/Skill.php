<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Photo',
        'SkillsType_id',
       
    ];
    public function skillsType(){ 
        
        return $this->belongsTo(SkillsType::class , 'SkillsType_id');

    }
}
