<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    use HasFactory;

    protected $table = 'fonts';

    protected $fillable = [
        'id',

        'name',
        'swap_link',
        'css',

        'created_at',
        'updated_at'
    ];
}
