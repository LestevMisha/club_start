<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Layout;

class ResetPassword extends Component
{
    // hidden
    public $token = null;
    // visible
    #[Validate("required|min:4|max:50|email")]
    public $email = null;
    public $password = null;
    public $password_confirmation = null;
    public $inputDisplay = "block";
    public $isEyeOpened = false;

    public $disabled = false;


    public function resetPassword()
    {
        // validate the fields
        $this->validate();

        // confirm password
        $this->validate([
            'password' => "required|min:8|confirmed"
        ]);

        $executed = RateLimiter::attempt(
            auth()->user()->uuid,
            5,
            function () {
                logger("attempted 1");

                $status = Password::reset(
                    $this->only('email', 'password', 'password_confirmation', 'token'),
                    function (User $user, string $password) {
                        $user->forceFill([
                            'password' => Hash::make($password)
                        ])->setRememberToken(Str::random(60));

                        $user->save();

                        event(new PasswordReset($user));
                    }
                );

                // if success redirect with success message in dashboard
                if ($status === Password::PASSWORD_RESET) {
                    session()->flash('success', __($status));
                    return redirect()->route('login');
                }


                return $this->addError('status', __($status));
            },
            30
            // 60 * 15
        );

        if (!$executed) {
            // disable submit button
            $this->disabled = true;
            session()->put("disabled", $this->disabled);

            // display -->
            // dd(RateLimiter::availableIn(auth()->user()->uuid));
            logger("bloked");
            $this->blockDispatcher(RateLimiter::availableIn(auth()->user()->uuid));
        }
    }
    // change/save eye state
    public function changeEyeOpened()
    {
        $this->isEyeOpened = !$this->isEyeOpened;
        session()->put("isEyeOpened", $this->isEyeOpened);
    }
    // change/save remember state
    public function changeRemember()
    {
        session()->put("remember", $this->remember);
    }


    public function mount()
    {
        logger(RateLimiter::availableIn(auth()->user()->uuid));
        // renew the `countdown` & `disabled`
        if (RateLimiter::availableIn(auth()->user()->uuid) === 0) {
            // enable button
            $this->disabled = false;
            session()->put("disabled", $this->disabled);
        } else {
            $this->disabled = session()->get("disabled", 0);
            $this->blockDispatcher(RateLimiter::availableIn(auth()->user()->uuid));
        }
        $this->isEyeOpened = session()->get("isEyeOpened", 0);
        $this->email = request()->email;
    }

    private function blockDispatcher($retryAfter, $message = "Too many attempts") {
        $this->dispatch("retryCountdown", retryAfter: $retryAfter, message: $message);
    }

    public function render()
    {
        return view('livewire.reset-password');
    }
}
