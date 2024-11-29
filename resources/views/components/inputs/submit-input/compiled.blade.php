{{-- blade --}}
@include('components.inputs.submit-input.element', [
    'uid' => $uid,
    'inscription' => $inscription,
    'attribute' => $attribute,
    'value' => $value ?? null,
    'inputAttrs' => $inputAttrs ?? null,
])
