<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = 'cards';
    
    // fillable or guarded
    protected $fillable = 
    [
        'name',
        'number',
        'image'
    ];
}
