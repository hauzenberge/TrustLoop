<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Avatar;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',

        'user_data_id'
    ];

    protected $guarded = [
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class);
    }

    public function userData()
    {
        return $this->belongsTo(UserData::class, 'user_data_id');
    }

    public function getAvatarAttribute($size = 150)
    {
        $avatar = Avatar::where('user_id', $this->id)->first();

        if ($avatar != null) {
            if ($avatar->is_uploaded == 1) {
                $path = asset('storage/app/public/' . $avatar->path);
            } else  $path = $avatar->path;

            return "<img class='avatar-img' src='$path' alt='...' width='$size' height='$size'>";
        } else {
            $initials = '';
            $words = preg_split("/\s+/", $this->name);
            foreach ($words as $w) {
                $initials .= mb_strtoupper(mb_substr($w, 0, 1));
            }
            $initials = mb_substr($initials, 0, 2);
            return '<span class="avatar-title text-bg-primary-soft">' . $initials . '</span>';
        }
    }

    public function getResourceUrlAttribute()
    {
        return url('/users/' . $this->id);
    }

    public static function getUserList()
    {
        $return = User::where('role', 'user')
            ->where('id', '!=', Auth::user()->id)
            ->with('userData.country', 'userData.plan')
            ->get()
            ->map(function ($item) {
                return [
                    'avatar' => $item->getAvatarAttribute(30),
                    'name' => $item->name,
                    'email' => $item->email,
                    'country' => $item->userData->country->name,
                    'id' => "#" . $item->id,
                    'account_type' => $item->userData->plan->name,
                    'view_link' => '#',
                    'edit_link' => $item->resource_url . '/edit',
                    'delete_link' => $item->resource_url . '/delete'
                ];
            });
        return $return;
    }
}
