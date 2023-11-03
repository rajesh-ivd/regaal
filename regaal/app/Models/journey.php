<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;
    
    protected $table = 'journey';
    
    protected $fillable = [
        'id',
        'year',
        'title',
        'created_at',
        'updated_at'
    ];
}
