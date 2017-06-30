<header>
    <div class="navbar">
        <ul class="nav nav-tabs ">
            <li class="nav-item" id="brand">
                DevTeam
            </li>
        </ul>
        <ul class="nav nav-tabs pull-xs-right">
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
            @endif


        </ul>
    </div>
</header>
