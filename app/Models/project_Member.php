<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_Member extends Model
{
    use HasFactory;
    protected $table ='member_project';
    protected $fillable = [
        'project_id',
        'Member_id',
    ];
}
