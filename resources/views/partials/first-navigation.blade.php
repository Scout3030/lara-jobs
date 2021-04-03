<div class="row align-items-center">
    <div class="col-lg-6 col-md-6">
        <ul class="header-left-content">
            <li>
                <span>{{__('Hot Line')}}</span>
                <a href="tel:+51969449655">+51 969-449655</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="header-right-content">
            <ul class="language">
                <li>
                    <div class="dropdown language-btn">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                            <span>
                            {{__('Language')}}
                                <i class="bx bx-chevron-down"></i>
                            </span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="{{route('set_language', ['lang' => 'en'])}}" class="dropdown-item">
                                <img src="assets\images\language\english.png" alt="Flag">
                                <span>{{__('English')}}</span>
                            </a>
                            <a href="{{route('set_language', ['lang' => 'es'])}}" class="dropdown-item">
                                <img src="assets\images\language\arab.png" alt="Flag">
                                <span>{{__('Spanish')}}</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            {{-- @guest
            <ul class="log-in">
                <li>
                    <a href="{{ route('login') }}">
                        <i class="bx bxs-lock"></i>
                        {{__('Log In')}}
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <i class="bx bxs-user"></i>
                        {{__('Register')}}
                    </a>
                </li>
            </ul>
            @endguest --}}
            @auth
            <ul class="log-in">
                <li>
                    <a href="{{ route('company.index') }}">
                        {{__('Companies')}}
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                    ><i class="bx bxs-user"></i>{{__('Log Out')}}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</div>
