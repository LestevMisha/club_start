<label class="modern-wrapper" style="display: {{ isset($inputDisplay) ? $inputDisplay : $this->inputDisplay }}">
    <input wire:model="{{ $attribute }}" id="{{ $attribute }}"
        class="modern-input {{ $errors->has($attribute) ? 'modern-input-error' : '' }}"
        type="{{ isset($this->isEyeOpened) && $this->isEyeOpened && (str_contains($attribute, 'password')) ? 'password' : 'text' }}"
        autocomplete="{{ $attribute }}" autocorrect="off" autocapitalize="off" spellcheck="false"
        inputmode="{{ $attribute }}" name="{{ $attribute }}" placeholder=""
        {{ str_contains($attribute, 'card_number') ? 'maxlength=16' : '' }}
        required>
    <span class="modern-label {{ $errors->has($attribute) ? 'modern-label-error' : '' }}">{{ $inscription }}</span>
    <div class="right-content">
        @if (str_contains($attribute, 'password'))
            <button wire:click="changeEyeOpened" class="password-button" type="button">
                <x-svg class="eye-icon" svg="{{ $this->isEyeOpened ? 'Eye' : 'ClosedEye' }}" />
            </button>
        @else
            <button class="reset-button" type="button" onclick="resetListener(event)">
                <x-svg class="reset-icon" svg="Cross" />
            </button>
        @endif
    </div>
</label>
