<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'work',
        'Linkedin',
        'Github',
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
