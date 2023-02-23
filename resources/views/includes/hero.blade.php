<div class="image-main">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Teen Titans">
</div>

<!-- BLACKBOARD PRODUCTS LIST -->
<section id="contents-space">
    <div class="blackboard">
        @yield('content')
    </div>
</section>

<!-- CENTER NAV -->
<section id="center-nav">
    <nav class="container">
        <!-- LINK LIST -->
        <ul>
            <li>
                <a href="">
                    <img :src="" alt="">
                    {{-- {{ jumboimage.text }} --}}
                </a>
            </li>
        </ul>
    </nav>
</section>