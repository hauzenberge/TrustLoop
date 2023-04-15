<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Survey;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'id',

        'text',         
        'type',

        'created_at',
        'updated_at',

        'survey_id'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
