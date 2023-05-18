<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'id',

        'card_number',
        'exp_month',
        'exp_year',
        'cvc',

        'created_at',
        'updated_at'
    ];
}
