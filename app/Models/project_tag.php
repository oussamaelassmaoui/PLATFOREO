<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_tag extends Model
{
    use HasFactory;
    protected $table ='project_tag';
    protected $fillable = [
        'project_id',
        'tag_id',
    ];
}
