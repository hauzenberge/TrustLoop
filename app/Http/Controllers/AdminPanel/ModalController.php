<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index($user_id)
    {
        $survey = User::find($user_id)->survey()->first();
     //   dd($survey->static_request);
        $script = null;

        if ($survey->static_request == 1) {
            $script = "
            <script>
                var listener = document.addEventListener('mouseleave', function(e){
                var btn = document.getElementById('modal_button');
                if(btn){
                    e.preventDefault();
                    btn.dispatchEvent(new Event('click'));
                }
                });
            </script>
            ";
        }

        return view('modal', [
            'user_id' => $user_id,
            'script' => $script
        ]);
    }
}
