<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use App\Services\Partials\_InputErrorServices;

class ForgotPasswordController extends Controller
{
    /* +++++++++++++++++++ HEADER +++++++++++++++++++ */
    public function __construct(
        protected _InputErrorServices $_inputErrorServices
    ) {}


    public function sendResetLink()
    {
        $email = request()->get("email");
        // // validate the fields
        // $this->validate();

        if (User::where('email', $email)->first() === null) {
            // Default authentication error
            return $this->_inputErrorServices->getErrorViewJsonByString("Предоставленный вами адрес электронной почты не существует.", "email");
        }

        // try {
        //     if ($this->disabled === false) {
        //         $email = $this->email;
        //         $status = Password::sendResetLink(compact('email'));
        //         if ($status === Password::RESET_LINK_SENT) {
        //             $this->disabled = true;
        //             session()->flash('success', __($status));
        //         } else {
        //             session()->flash('failure', __($status));
        //         }
        //     }
        // } catch (Exception $e) {
        //     $error = "Пожалуйста проверьте интернет соединение. Попробуйте позже. Если ничего не помогло напишите нам в поддержку." . " Ошибка сервера: " . $e->getMessage();
        //     $this->addError("server", $error);
        // }
    }


    public function __invoke()
    {
        return view("pages.auth.forgot-password");
    }
}
