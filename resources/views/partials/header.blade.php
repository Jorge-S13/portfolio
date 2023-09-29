<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- logo -->
                <div class="logo"><a href="{{route('main.index')}}">rex</a></div>
                <!-- /logo -->

                <!-- navigation -->
                <nav>

                    <div id="rex_menu">
                        <ul>
                            <li class="{{ request()->routeIs('main.index') ? 'has-sub active' : '' }}">
                                <a href="{{route('main.index')}}">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('blog.index') ? 'has-sub active' : '' }}">
                                <a href="{{route('blog.index')}}">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('about.index') ? 'has-sub active' : '' }}">
                                <a href="{{route('about.index')}}">
                                    <span>About</span>
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('contact.index') ? 'has-sub active' : '' }}">
                                <a href="{{route('contact.index')}}">
                                    <span>Contact</span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="{{route('dashboard')}}">
                                    <span>Log in</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('dashboard')}}">
                                            <span>Log in</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}">
                                            <span>Register</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
                <!-- /navigation -->


            </div>
        </div>
    </div>
</header>
