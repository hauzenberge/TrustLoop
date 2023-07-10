<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';

    protected $fillable = [
        'id',

        'name',
        'alias',        
        'price', 
        'description',
        'features',

        'max_request',

        'created_at',
        'updated_at'
    ];
}
