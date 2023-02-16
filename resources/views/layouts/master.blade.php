<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etf | Quanta Shares - @yield('title')</title>
    @yield('meta')
    @yield('styles')
</head>

<body>
    {{-- Popup --}}
    @yield('popup')
    {{-- End Popup --}}

    {{-- Header --}}
    @include('commons.header')
    {{-- End Header --}}
    <main>
        @yield('content')
    </main>
    {{-- Footer --}}
    @include('commons.footer')
    {{-- End Footer --}}

    @vite(['resources/js/global.js'])
    @yield('scripts')
</body>

</html>
