<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="container mx-auto">

            <header class="py-6">
                <h1>Laracasts</h1>
            </header>


            <main class="flex">
                <aside class="w-1/5">
                    <ul>
                        <li><router-link to='/'>Home</router-link></li>
                        <li><router-link to='/about'>About</router-link></li>
                    </ul>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>



            <hr>


        </div>

    </div>
</body>

</html>
