<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | Home</title>

    @vite('resouces/js/app.js')
</head>
<body>
    
    <header class="container">
        <figure id="logo-header">
            <a href="#">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC_Logo">
            </a>
        </figure>
        <nav>
            <ul>
                <li>
                    <a :href="">Home</a>
                    <a :href="">Home</a>
                    <a :href="">Home</a>
                    <a :href="">Home</a>
                </li>
            </ul>
        </nav>
    </header>

</body>
</html>