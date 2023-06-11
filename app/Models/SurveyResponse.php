<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\User;

class SurveyResponse extends Model
{
    use HasFactory;

    protected $table = 'survey_responses';

    protected $fillable = [
        'user_id',
        'sum_requests',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
