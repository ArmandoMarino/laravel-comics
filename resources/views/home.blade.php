<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | Home</title>

    @vite('resources/js/app.js')
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
                    <a :href="">ciao</a>
                    <a :href="">Home</a>
                </li>
            </ul>
        </nav>



        {{-- FOOTER --}}
        <footer>
            <!-- NAV LINKS -->
            <section id="footer-links" class="container">
                <nav>
                    <div class="links-left">
    
                    </div>
                    <!-- COL LEFT -->
                    <div class="col">
                        <h3>DC COMICS</h3>
                        <ul>
                            <li>
                                <a href="#">ciao</a>
                            </li>
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            <li>
                                <a href="#">ciao 2</a>
                            </li>
                        </ul>
                    </div>
    
                    <!-- COL CENTER -->
                    <div class="col">
                        <h3>DC</h3>
                        <ul>
                            <li>
                                <a>ciao 3</a>
                            </li>
                        </ul>
                    </div>
    
                    <!-- COL RIGHT -->
                    <div class="col">
                        <h3>SITES</h3>
                        <ul>
                            <li>
                                <a href="">ciao 4</a>
                            </li>
                        </ul>
                    </div>
    
                    <div id="big-logo">
    
                    </div>
                </nav>
    
            </section>
    
            <!-- SOCIALS -->
            <section id="footer-socials">
                <div id="wrapper" class="container">
                    <div id="sign-up">
                        <h3>SIGN-UP NOW!</h3>
                    </div>
    
                    <div id="follow">
                        <h3>FOLLOW US</h3>
                        <a href="#"><i class="fa-brands fa-2xl fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-2xl fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-2xl fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-2xl fa-pinterest"></i></a>
                        <a href="#"><i class="fa-solid fa-2xl fa-location-dot"></i></a>
                    </div>
                </div>
    
            </section>
        </footer>
    </template>
    </header>

</body>
</html>