<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.partials.header')

<body class="index-page">

    @include('components.partials.navbar')

    {{ $slot }}

    {{-- @yield('footer') --}}
    @include('components.partials.footer')

    @livewireScripts

    @include('components.partials.script')
</body>

</html>
