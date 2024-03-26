<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ecole',
        'specialty',
        'Start_Date',
        'date_final',
        'description',

    ];
}
