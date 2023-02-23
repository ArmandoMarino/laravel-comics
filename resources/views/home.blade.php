<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resouces/js/app.js')
</head>
<body>
    
    <header class="container">
        <figure id="logo-header">
            <a href="#">
                <img src="../assets/img/dc-logo.png" alt="DC_Logo">
            </a>
        </figure>
        <nav>
            <ul>
                <li v-for="link in links" :key="link.text" :class="{ 'active': link.current }">
                    <a :href="link.url">{{ link.text }}</a>
                </li>
            </ul>
        </nav>
    </header>

</body>
</html>