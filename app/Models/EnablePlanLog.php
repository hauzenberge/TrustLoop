<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Plan;
use App\Models\User;

class EnablePlanLog extends Model
{
    use HasFactory;

    protected $table = 'enable_plan_logs';

    protected $fillable = [
        'user_id',
        'plan_id',
        'survey_responses',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
