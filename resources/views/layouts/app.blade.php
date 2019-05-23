<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>
    <div id="app">
        @include('partials._nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('partials._javascripts')
</body>
</html>
