<html>
    <head>

    {{-- <title>{{config('app.name', 'Election Commission')}}</title> --}}
    <title>Voter ID Generation System</title>
    <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('layouts.navbar')

        <div class="container">

            @yield('content')

            @include('layouts.footer')
        </div>
    </body>
</html>
