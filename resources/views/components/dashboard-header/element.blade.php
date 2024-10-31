<div class="dashboard-header">
    <div class="dashboard-wrapper">
        <div class="dashboard-content flex h gap w100 h100 align">
            <div class="b-text">{{ __('components/dashboard-header.1') }}</div>
            <a class="flex h gap align ml-a" href="{{ route('private.referral.transactions') }}">
                <div class="b-text">{{ __('components/dashboard-header.2') }} {{ auth()->user()->amount_earned }}₽</div>
            </a>
        </div>
    </div>
</div>
