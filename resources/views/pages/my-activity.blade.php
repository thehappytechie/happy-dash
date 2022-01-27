@section('title', 'Activity Log')
<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Activity Log
        </h1>
    </div>

    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <div class="margin-y-md">
                <div class="grid gap-lg margin-right-lg">
                    <a href="{{ route('security') }}">&larr; Account security</a>
                    <p>A history of security-related activity on your account. Logging in or out, changing your
                        password, etc.</p>
                </div>

                @foreach ($activity as $event)

                {{ $event->description }}

                {{ $event->properties}}

                @endforeach

            </div>
        </div>
    </div>
</x-layout>
