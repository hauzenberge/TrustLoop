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

        'popup_text',
        'feedback_request',
        'review_text',
        'review_button_text',
        'link_url',

        'created_at',
        'updated_at'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function getReviewButtonTextAttribute($value)
    {
        if ($value == null) {
            return 'Send the review';
        }else return $value;
    }

    public function getFeedbackRequestAttribute($value)
    {
        if ($value == null) {
            return 'Thank you!';
        }else return $value;
    }    

    public function getLinkUrlAttribute($value)
    {
        if ($value == null) {
            return url('/');
        }else return $value;
    } 
}
