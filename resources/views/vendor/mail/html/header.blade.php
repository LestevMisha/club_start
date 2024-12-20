@props(['url'])
<tr>
    <td class="header">
        <a href="{{ URL::to('/') }}" style="display: inline-block;">
            <img src="{{ URL::asset('favicon.ico') }}" class="logo" alt="{{ __('app.name') }}">
        </a>
    </td>
</tr>
