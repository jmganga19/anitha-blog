<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="{{route('/')}}" class="navbar-brand tm-site-name">Mama  Anayejali</a>

            <!-- navbar -->
            <nav class="navbar tm-main-nav">

                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>

                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        
                        <li class="nav-item {{ Request::route()->getName()  === '/' ? 'active': '' }}">
                            <a href="{{route('/')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item {{ Request::route()->getName()  === 'about' ? 'active': '' }}">
                            <a href="{{route('about')}}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item {{ Request::route()->getName()  === 'blog' ? 'active': '' }}">
                            <a href="{{route('blog')}}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item {{ Request::route()->getName()  === 'contact' ? 'active': '' }}">
                            <a href="{{route('contact')}}" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item  {{ Request::route()->getName()  === 'login' ? 'active': '' }}">

                            <a href="{{route('login')}}" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>

            </nav>

        </div>
    </div>
</div>
