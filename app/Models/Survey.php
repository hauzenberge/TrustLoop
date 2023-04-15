<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Question;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'surveys';

    protected $fillable = [
        'id',

        'title',

        'created_at',
        'updated_at'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
