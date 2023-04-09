<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Avatar extends Model
{
    use HasFactory;

    protected $table = 'avatars';

    protected $fillable = [
        'user_id',
        'path',
        'is_uploaded'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function AvatarDelete($user_id)
    {
        $avatars = Avatar::where('user_id', $user_id);

        if ($avatars->count() != 0) {
            $avatar = $avatars->first();
            if ($avatar->is_uploaded == 1) {
              Storage::disk('public')->delete($avatar->path);
            }
             $avatars->delete();
        }
    }
}
