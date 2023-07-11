<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;
use App\Models\Plan;

use App\Models\Card;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'users_data';
    protected $fillable = [
        'id',

        'country_id',
        'plan_id',

        'card_id',

        'company_name',

        'created_at',
        'updated_at'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }    

    public function card()
    {
        return $this->belongsTo(Card::class, 'card_id');
    }
}
