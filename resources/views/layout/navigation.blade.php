<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Apex Innovations
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == '' ? 'activeNav' : ''}}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('education') ? 'activeNav' : ''}}" href="/">Education & Tools</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('quantum') ? 'activeNav' : ''}}" href="/">Quantum Competency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('about') ? 'activeNav' : ''}}" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('about') ? 'activeNav' : ''}}" href="/">Contact Us</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>