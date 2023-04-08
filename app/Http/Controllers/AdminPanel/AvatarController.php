<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Avatar;

use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function store( Request $request)
    {
        $user = Auth::user();

        $avatars = Avatar::where('user_id', $user->id);

        if ($avatars->count() != 0) {
            $avatar = $avatars->first();
            if ($avatar->is_uploaded == 1) {
              //  dd($avatar->path);
              Storage::disk('public')->delete($avatar->path);
            }
             $avatars->delete();
        }


        $avatar = new Avatar();
        $avatar->user_id = $user->id;

        $avatar_path = $request->file('avatar')->store('avatars', 'public', $request->file('avatar')->getClientOriginalName());
    
        $avatar->path = $avatar_path;

        $avatar->is_uploaded = true;
        $avatar->save();

        return redirect()->back()->with('success', 'Avatar uploaded successfully!');
    }
}
