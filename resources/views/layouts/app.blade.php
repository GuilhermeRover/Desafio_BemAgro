<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <script>
            // Dark mode configuration
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>

        <title>{{ str_replace('_', ' ', env('app.name')) }}</title>
    </head>
    <body class="bg-white dark:bg-gray-900 toggle-theme">
        
        <div x-data="{dark: localStorage.theme === 'dark', Menu: false, githubDetails: false}">
            @yield('body')
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script>
            // toggle theme
            var htmlClasses = "";
            function change() {
                htmlClasses = document.querySelector('html').classList;
                if(localStorage.theme == 'dark') {
                    htmlClasses.remove('dark');
                    localStorage.removeItem('theme')
                } else {
                    htmlClasses.add('dark');
                    localStorage.theme = 'dark';
                }
            }
        </script>
    </body>
</html> 