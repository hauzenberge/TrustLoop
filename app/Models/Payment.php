<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'id',

        'user_id',
        'payment_system',
        'quantity',
        'status',

        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPaymentSystemAttribute($value)
    {
        switch ($value) {
            case 'paypal': {
                    $return = asset('assets_project/assets/images/logos/paypal.png');
                    break;
                }
            default: {
                    $return = asset('assets_project/assets/images/logos/stripe.png');
                    break;
                }
        }
        return $return;
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('m/d/y');
    }

    public static function getMapFromAdminList($search = 'all', $where = null)
    {
        if ($search === 'all') {
            $query = Payment::query();
        }else{
            $query = Payment::where($where["fillable"], $where["value"]);
        }

       $query = $query->with('user')->get();
        
        return $query->map(function ($item) {
            return [
                'id' => $item->id,
                'user' => [
                    'avatar' => $item->user->avatar,
                    'name' => $item->user->name
                ],
                'created_at' => $item->created_at,
                'payment_system' => $item->payment_system,
                'quantity' => $item->quantity,
                'status' => $item->status,
            ];
        });
        
    }
}
