@props(['url'])
<tr>
    <td class="header">
        <a href="{{ URL::to('/') }}" style="display: inline-block;">
            @if (trim($slot) === 'КЛУБ START')
                <img src="{{ URL::asset('images/logo.png') }}" class="logo" alt="КЛУБ START">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
