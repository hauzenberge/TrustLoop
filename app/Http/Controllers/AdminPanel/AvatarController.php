<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Avatar;

use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function store($user_id, Request $request)
    {
        //dd($user_id);
        //$user = Auth::user();

        Avatar::AvatarDelete($user_id);     

        $avatar = new Avatar();
        $avatar->user_id = $user_id;

        $avatar_path = $request->file('avatar')->store('avatars', 'public', $request->file('avatar')->getClientOriginalName());
    
        $avatar->path = $avatar_path;

        $avatar->is_uploaded = true;
        $avatar->save();

        return redirect()->back()->with('success', 'Avatar uploaded successfully!');
    }
}
