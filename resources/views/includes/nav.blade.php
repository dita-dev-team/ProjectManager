<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark teal">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <p id="icon" class="mx-auto">DEV</p>
                {{--<p>PROJECT MANAGER</p>--}}
            </a>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    @if($navbar)
                        @foreach($navbar as $item)
                            @if (Route::currentRouteName() == strtolower($item['text']))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ $item['link'] }}"> {{ $item['text'] }}<span
                                                class="sr-only">(current)</span></a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $item['link'] }}"> {{ $item['text'] }} </a>
                                </li>
                            @endif
                        @endforeach
                        @if(Auth::check())


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <a class="nav-link" href="{{ route('logout') }}"> Logout </a>
                                </ul>

                            </li>

                        @else
                            <li class="nav-item {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ route('register') }}"> Register </a>
                            </li>
                            <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ route('login') }}"> Login </a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
