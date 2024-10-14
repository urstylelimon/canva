@component('mail::message')
    # Incomplete Tasks

    Here is your hourly update on the incomplete tasks.

    @foreach ($items as $item)
        - {{ $item->name }}
    @endforeach

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
