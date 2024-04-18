@if ($errors->any())
    <div>
        @foreach ($errors->getMessages() as $key => $message)
            <span class="text-error more mt-1">
                {!! $message[0] !!}
            @break

        </span>
    @endforeach
</div>
@endif
