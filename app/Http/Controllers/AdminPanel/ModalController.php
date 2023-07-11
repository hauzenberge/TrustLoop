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
       // dd($survey->font);

        $script = null;
        $button_style = '';


        if ($survey->static_request_widget == 0) {
            $button_style = 'style="
            display: none;
        "';
        }

        if ($survey->exit_intent_feedback_popup == 1) {
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
            'script' => $script,
            'button_style' => $button_style,
            'font' => $survey->font,
            'style' => $survey->style
        ]);
    }
}
