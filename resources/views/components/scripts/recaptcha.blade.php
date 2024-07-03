{{-- resources/views/components/recaptcha-scripts.blade.php --}}
{{-- ---------------------- reCAPTCHA SETUP ---------------------- --}}
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Livewire.on('executeCaptchaValidation', () => {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.google.recaptcha.site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    @this.dispatchSelf('captchaResponse', {
                        token: token
                    });
                });
            });
        })
    });
</script>
