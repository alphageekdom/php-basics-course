<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.js', 'react/src/main.jsx'])
    </head>

    <body>
        <!-- Header/Navigation -->
        <header style="background-color: black; color: white;">
            <div class="logo">MySite.com</div>

            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </nav>
        </header>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer style="background-color: black; color: white;">
            <div class="logo">MySite.com | Footer</div>
        </footer>
    </body>

</html>