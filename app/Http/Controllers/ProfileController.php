<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\Avatar;
use App\Models\UserData;
use App\Models\Country;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

        $returnData = [
            'user' => $request->user(),
            'title' => $request->user()->name . " Profile",
            'active' => null
        ];

        switch ($request->user()->role) {
            case 'user': {
                    // dd($request->user()->role);
                    $userData = UserData::where('id', $request->user()->user_data_id)
                        ->with('country')
                        ->first();
                    $returnData['userData'] = $userData;
                    $returnData['countries'] = Country::all();
                    break;
                }
            default:
                $returnData = [
                    'user' => $request->user(),
                    'title' => $request->user()->name . " Profile",
                    'active' => null
                ];
                break;
        }

        return view('admin-panel.user.profile.edit', $returnData);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['nullable', 'current-password'],
        ]);

        $user = $request->user();


        Avatar::AvatarDelete($user->id);

        Auth::logout();

        $user->delete();
        UserData::find($user->user_data_id)->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
