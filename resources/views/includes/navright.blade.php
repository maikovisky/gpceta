<!-- Navbar Toolbar Right -->
<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
    <li class="dropdown">
        <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
        data-animation="scale-up" role="button">
          <span class="avatar avatar-online">
            <img src="{{URL::asset('images/user.png')}}" alt="...">
            <i></i>
          </span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li role="presentation">
                <a href="{{URL::asset("profile")}}"><i class="icon wb-user" aria-hidden="true"> {{Lang::get('menu.UserProfile')}}</i></a>
            </li>
            <li role="presentation">
                <a href="{{URL::asset("config")}}"><i class="icon wb-settings" aria-hidden="true"> {{Lang::get('menu.Settings')}}</i></a>
            </li>
            <li role="presentation">
                <a href="{{URL::asset("auth/logout")}}"><i class="icon wb-power" aria-hidden="true"> {{Lang::get('menu.logout')}}</i></a>
            </li>
        </ul>
    </li>
</ul>
<!-- END Navbar Toolbar Roght -->