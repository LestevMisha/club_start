<label class="modern-blox-wrapper">
    <input class="modern-blox" wire:model="{{ $attribute }}" id="{{ $attribute }}" value="{{ $value }}" readonly>
    <span class="modern-blox-label emphasize orange {{ $class }}">{{ $inscription }}</span>
    {{-- <img class="hash-icon" src="{{ URL::asset('images/svg/img-case/hash-dynamic-color-red.svg')}}" alt="hash-dynamic-color"> --}}

    <div class="right-content">
        <button class="reset-button" type="button">
            <x-svg class="copy-icon" svg="Copy" />
        </button>
    </div>
</label>
