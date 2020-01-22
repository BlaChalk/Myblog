<header class= "l-header @if($page=='index') l-header_overlay @endif">

    <div class="l-navbar l-navbar_expand
        @if($page=='index')l-navbar_t-dark-trans
        @else   l-navbar_t-light
        @endif
        js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index.html" class="logo-brand">
                    @if ($page=='index')
                        <img class="retina" src="assets/img/logo-dark.png" alt="Massive">
                    @else
                        <img class="retina" src="assets/img/logo.png" alt="Massive">
                    @endif

                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li class="@if($page=='index')active @endif"><a href="/">Home</a>
                    </li>
                    <li class="@if($page=='about')active @endif"><a href="/about">About</a>
                    </li>
                    <li class="@if(request()->is('contact'))active @endif"><a href="/contact">Contact</a>
                    </li>
                </ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div>

</header>
