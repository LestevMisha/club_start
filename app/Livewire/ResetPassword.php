<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\RateLimiter;

class ResetPassword extends Component
{

    // // hidden
    // public $token = null;
    // // visible
    // #[Validate("required|min:4|max:50|email")]
    // public $email = null;
    // public $password = null;
    // public $password_confirmation = null;
    // public $inputDisplay = "block";
    // public $isEyeOpened = false;

    // public $disabled = false;

    // public $captchaScore = 0;
    // protected $listeners = ['captchaResponse' => 'resetPassword'];

    // public function resetPassword($token)
    // {
    //     /* ---------- reCAPTCHA Check ---------- */
    //     // logger("token:" . $token);
    //     $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . config('services.google.recaptcha.secret_key') . '&response=' . $token);
    //     $data = $response->json();

    //     if ($data["success"]) {
    //         $this->captchaScore = $data["score"];

    //         if ($this->captchaScore > 0.6) {
    //             // skip, reCAPTCHA check is completed
    //             // logger($this->captchaScore);
    //         } elseif ($this->captchaScore > 0.3) {
    //             return $this->addError('status', __("Перезагрузите страницу, вы не прошли reCAPTCHA проверку."));
    //         } else {
    //             return $this->addError('status', __("Вы являетесь ботом с вероятностью в 99.99%."));
    //         }
    //     }

    //     // validate the fields
    //     $rateLimiterValidation = RateLimiter::attempt(
    //         "rateLimiterValidation" . Str::uuid(),
    //         10,
    //         function () {
    //             // confirm password
    //             $this->validate([
    //                 'password' => "required|min:8|confirmed",
    //             ]);
    //         },
    //         60 * 30 // 30 min
    //     );

    //     if (!$rateLimiterValidation) {
    //         // disable submit button
    //         $this->disabled = true;
    //         $this->updateSession("disabled", $this->disabled);
    //         $this->blockDispatcher(RateLimiter::availableIn("rateLimiterValidation" . Str::uuid()));
    //         return $this->addError('status', __("Слишком много попыток, попробуйте снова через 30 минут"));
    //     }


    //     $rateLimiterPasswordReset = RateLimiter::attempt(
    //         "rateLimiterPasswordReset" . Str::uuid(),
    //         3,
    //         function () {

    //             $status = Password::reset(
    //                 $this->only('email', 'password', 'password_confirmation', 'token'),
    //                 function (User $user, string $password) {
    //                     $user->forceFill([
    //                         'password' => Hash::make($password)
    //                     ])->setRememberToken(Str::random(60));

    //                     $user->save();

    //                     event(new PasswordReset($user));
    //                 }
    //             );

    //             // if success redirect with success message in dashboard
    //             if ($status === Password::PASSWORD_RESET) {
    //                 session()->flash('success', __($status));
    //                 return redirect()->route('login');
    //             }


    //             return $this->addError('status', __($status));
    //         },
    //         60 * 15 // 15 min
    //     );

    //     if (!$rateLimiterPasswordReset) {
    //         // disable submit button
    //         $this->disabled = true;
    //         $this->updateSession("disabled", $this->disabled);
    //         $this->blockDispatcher(RateLimiter::availableIn("rateLimiterPasswordReset" . Str::uuid()));
    //         return $this->addError('status', __("Слишком много попыток, попробуйте снова через 15 минут"));
    //     }
    // }


    // // change/save eye state
    // public function changeEyeOpened()
    // {
    //     $this->isEyeOpened = !$this->isEyeOpened;
    //     $this->updateSession("isEyeOpened", $this->isEyeOpened);
    // }

    // public function mount()
    // {
    //     if (RateLimiter::availableIn("rateLimiterValidation" . Str::uuid()) === 0) {
    //         // enable button
    //         $this->disabled = false;
    //         $this->updateSession("disabled", $this->disabled);
    //     } else {
    //         $this->disabled = session()->get("disabled", 0);
    //         $this->blockDispatcher(RateLimiter::availableIn("rateLimiterValidation" . Str::uuid()));
    //     }
    //     // renew the `countdown` & `disabled`
    //     if (RateLimiter::availableIn("rateLimiterPasswordReset" . Str::uuid()) === 0) {
    //         // enable button
    //         $this->disabled = false;
    //         $this->updateSession("disabled", $this->disabled);
    //     } else {
    //         $this->disabled = session()->get("disabled", 0);
    //         $this->blockDispatcher(RateLimiter::availableIn("rateLimiterPasswordReset" . Str::uuid()));
    //     }
    //     $this->isEyeOpened = session()->get("isEyeOpened", 0);
    //     $this->email = request()->email;
    // }

    public $token = null;
    public $email = null;
    public $password = null;
    public $password_confirmation = null;
    public $inputDisplay = "block";
    public $isEyeOpened = false;
    public $disabled = false;

    protected $listeners = ['captchaResponse' => 'resetPassword'];

    public function resetPassword($token)
    {
        $this->validate([
            'password' => "required|min:8|confirmed",
        ]);

        if (!$this->verifyCaptcha($token)) {
            return;
        }

        if (!$this->performRateLimitedValidation('rateLimiterValidation', 10, function () {
            $this->validate([
                'password' => "required|min:8|confirmed",
            ]);
        }, 30)) {
            return $this->addError('status', __("Слишком много попыток, попробуйте снова через 30 минут"));
        }

        if (!$this->performRateLimitedReset('rateLimiterPasswordReset', 3, 15)) {
            return $this->addError('status', __("Слишком много попыток, попробуйте снова через 15 минут"));
        }
    }

    private function verifyCaptcha(string $token): bool
    {
        // Define the score thresholds
        $lowScoreThreshold = 0.3;
        $mediumScoreThreshold = 0.6;

        // Send the request to the Google reCAPTCHA API
        $response = Http::get('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.google.recaptcha.secret_key'),
            'response' => $token
        ])->json();

        // Check if the API response indicates a successful verification
        if (!isset($response['success']) || !$response['success']) {
            return false;
        }

        // Retrieve the reCAPTCHA score from the response
        $captchaScore = $response['score'] ?? 0;

        // Handle different score scenarios
        if ($captchaScore <= $lowScoreThreshold) {
            $this->addError('status', __("messages.bot_detected"));
            return false;
        } elseif ($captchaScore <= $mediumScoreThreshold) {
            $this->addError('status', __("messages.captcha_failed"));
            return false;
        }

        // If the score is above the medium threshold, verification is successful
        return true;
    }


    private function performRateLimitedValidation($key, $maxAttempts, $callback, $minutes)
    {
        $key .= $this->getRateLimiterKey();

        return RateLimiter::attempt($key, $maxAttempts, $callback, $minutes * 60);
    }

    private function performRateLimitedReset($key, $maxAttempts, $minutes)
    {
        $key .= $this->getRateLimiterKey();

        return RateLimiter::attempt($key, $maxAttempts, function () {
            $status = Password::reset(
                $this->only('email', 'password', 'password_confirmation', 'token'),
                function (User $user, string $password) {
                    $user->forceFill(['password' => Hash::make($password)])->setRememberToken(Str::random(60));
                    $user->save();

                    event(new PasswordReset($user));
                }
            );

            if ($status === Password::PASSWORD_RESET) {
                session()->flash('success', __($status));
                return redirect()->route('login');
            }

            $this->addError('status', __($status));
        }, $minutes * 60);
    }

    // change/save eye state
    public function changeEyeOpened()
    {
        $this->isEyeOpened = !$this->isEyeOpened;
        $this->updateSession('isEyeOpened', $this->isEyeOpened);
    }

    public function mount()
    {
        $this->disabled = $this->getRateLimiterState('rateLimiterValidation', 30) ||
            $this->getRateLimiterState('rateLimiterPasswordReset', 15);
        $this->isEyeOpened = session()->get("isEyeOpened", false);
        $this->email = request()->input('email', null);
    }





    /* +++++++++++++++++++ HELPER METHODS +++++++++++++++++++ */
    private function getRateLimiterKey()
    {
        return md5($this->email . $this->token);
    }

    private function getRateLimiterState($key, $minutes)
    {
        $key .= $this->getRateLimiterKey();

        if (RateLimiter::availableIn($key) === 0) {
            return false;
        }

        $this->blockDispatcher(RateLimiter::availableIn($key));
        return session()->get("disabled", false);
    }

    private function blockDispatcher($retryAfter, $message = "Too many attempts")
    {
        $this->dispatch("retryCountdown", retryAfter: $retryAfter, message: $message);
    }

    private function updateSession($key, $value)
    {
        session()->put($key, $value);
    }


    public function render()
    {
        return view('livewire.reset-password');
    }
}
