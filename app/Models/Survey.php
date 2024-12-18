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

        'static_request_widget',
        'exit_intent_feedback_popup',

        'font_id',
        'style',

        'link_url',
        'static_request',

        'hide_modal',     
        'hide_for_months',

        'created_at',
        'updated_at'
    ];
    

    public function font()
    {
        return $this->belongsTo(Font::class, 'font_id');
    }

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
    
    public function getPopupTextAttribute($value)
    {
        return "What do you think so far?";
    }

    public function getReviewTextAttribute($value)
    {
        return "Thank you! If you have time, please leave us a review.";
    }

    /*
    public function getLinkUrlAttribute($value)
    {
        if ($value == null) {
            return url('/');
        }else return $value;
    } 
    */
}
