<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{{ config('app.name') }}</title>
    @livewireStyles
    <link href="{{ asset('css/app.css') }}?{{ rand() }}" rel="stylesheet">

    {{-- @toastScripts --}}
    <script src="{{ asset('js/app.js') }}?{{ rand() }}" defer></script>
</head>

<body class="relative h-full bg-gray-50">

    <div class="h-full">
        {{ $slot }}
    </div>

    @livewireScripts
    @if (app()->isLocal())
        <script src="{{ config('app.url') }}:3000/browser-sync/browser-sync-client.js"></script>
    @endif
    <livewire:toasts />

    @stack('modals')
    @stack('scripts')

    <script>
        window.addEventListener('log', event => {
            console.log(event.detail.message);
        })
    </script>
</body>

</html>
