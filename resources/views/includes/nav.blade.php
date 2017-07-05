<header>
    <div class="navbar">
        <ul class="nav nav-tabs ">
            <li class="nav-item" id="brand">
                DevTeam
            </li>
        </ul>
        <ul class="nav nav-tabs pull-xs-right">
<<<<<<< HEAD
            @if($navbar)
                @foreach($navbar as $item)
                    @if (Route::currentRouteName() == strtolower($item['text']))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ $item['link'] }}"> {{ $item['text'] }} </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $item['link'] }}"> {{ $item['text'] }} </a>
                        </li>
                    @endif
                @endforeach
                @if(Auth::check())

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"> Logout </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'register' ? 'active' : '' }}"
                           href="{{ route('register') }}"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'login' ? 'active' : '' }}"
                           href="{{ route('login') }}"> Login </a>
                    </li>
                @endif
            @endif


=======
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}"> Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}"> About </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'/tutorials'}}"> Tutorial </a>
            </li>
>>>>>>> feature_tutorialsPage
        </ul>
    </div>
</header>
