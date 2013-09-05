@section("header")
    <div class="header">
        <div class="container">
            <h1>Tutorial</h1>
            @if (Auth::check())
                @if (allowed("user/logout"))
                    <a href="{{ URL::route("user/logout") }}">logout</a> |
                @endif
                @if (allowed("user/profile"))
                    <a href="{{ URL::route("user/profile") }}">profile</a> |
                @endif
                @if (allowed("group/index"))
                    <a href="{{ URL::route("group/index") }}">groups</a>
                @endif
            @else
                <a href="{{ URL::route("user/login") }}">login</a>
            @endif
        </div>
    </div>
@show