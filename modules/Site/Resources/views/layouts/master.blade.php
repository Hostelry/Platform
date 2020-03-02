<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        @stack('css')
    </head>
    <body>
        <div class="app" id="app">
            <main>
                @yield('content')
            </main>
            <footer class="footer has-background-grey-darker">
                <span class="has-text-white">Developed and Maintained by Coding Matters</span>
            </footer>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        @stack('js')
    </body>
</html>
