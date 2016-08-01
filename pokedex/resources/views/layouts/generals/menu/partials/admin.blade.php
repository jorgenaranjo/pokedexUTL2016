<ul class="right hide-on-med-and-down">
{{--
        <li><a href="{{ route('users.index') }}"><i class="medium material-icons left">supervisor_account</i> {{ trans('menus.users') }}</a></li>
--}}
        <li><a href="#!"><i class="medium material-icons left">supervisor_account</i> {{ trans('menus.users') }}</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
                {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
    
</ul>
<!-- Responsivo -->
<ul class="side-nav" id="mobile-demo">
    <li>
        <img src="{{ asset(env('LOGO')) }}" class="responsive-img">
    </li>
    <li><a href="#!"><h5>{{ Auth::user()->name }}</h5></a></li>

{{--
        <li><a href="{{ route('users.index') }}"><i class="medium material-icons left">supervisor_account</i> {{ trans('menus.users') }}</a></li>
--}}
        <li><a href="#!"><i class="medium material-icons left">supervisor_account</i> {{ trans('menus.users') }}</a></li>
        <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('menus.logout') }}</a></li>
    
</ul>

<!-- Dropdown Logout -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('menus.logout') }}</a></li>
</ul>
