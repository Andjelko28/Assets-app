<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">

    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="container mx-auto">

            <header>
                <h1>Laracasts</h1>
            </header>


            <main>
                <aside>
                    <router-link to='/'>Home</router-link>
                    <router-link to='/about'>About</router-link>
                </aside>

                <div class="primary">
                    <router-view></router-view>
                </div>
            </main>



            <hr>


        </div>

    </div>
</body>

</html>
