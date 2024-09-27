<?php

namespace App\Services\Partials;

class _StepServices
{

    // 1. Get rendered error view by string argument.
    public function getStep($step, $data)
    {
        $stepView = view("partials._register-steps", ['step' => $step, 'data' => $data])->render();
        return response()->json(['view' => $stepView], 200);
    }

}
