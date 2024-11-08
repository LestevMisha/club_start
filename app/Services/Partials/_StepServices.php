<?php

namespace App\Services\Partials;

class _StepServices
{

    // 1. Get rendered error view by string argument.
    public function getStep($step)
    {
        $stepView = view("partials._register-step-$step")->render();
        return response()->json(['view' => $stepView], 200);
    }

}
