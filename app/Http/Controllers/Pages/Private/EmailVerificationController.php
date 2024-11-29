<?php

namespace App\Http\Controllers\Pages\Private;

class EmailVerificationController {
    public function __invoke() {
        return view("pages.private.email-verification.bundled");
    }
}