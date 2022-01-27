@props([
    'method' => 'POST',
    'action' => '',
])

<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}" action="{{ $action }}">
    @csrf

    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
