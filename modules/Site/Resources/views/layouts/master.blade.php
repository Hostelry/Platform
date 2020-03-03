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
            <footer class="footer has-background-grey-dark">
                <div class="columns">
                    <div class="column">
                        <p class="has-text-white has-text-left ">Copyright &#169; @php echo date('Y'); @endphp All rights reserved.</p>
                    </div>
                    <div class="column">
                        <p class="has-text-white has-text-right ">Developed and maintained by <a href="https://codingmatters.today" class="has-text-primary">Coding Matters</a></p>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        @stack('js')
    </body>
</html>
