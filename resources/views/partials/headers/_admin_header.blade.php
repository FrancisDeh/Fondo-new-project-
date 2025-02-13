<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">
                <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                    <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Fondo">
                </div>
                <ul class="navbar-list right">
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
{{--                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>--}}
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online">

                                    @if(auth()->user()->profile_image)
                                    <img src="{{ asset('uploads/'. auth()->user()->profile_image) }}" alt="avatar">
                                @else
                                    <img src="{{ asset('app-assets/images/avatar/profile.png') }}" alt="avatar">
                                @endif
                                <i></i></span></a></li>
                </ul>
{{--                <!-- notifications-dropdown-->--}}
{{--                <ul class="dropdown-content" id="notifications-dropdown">--}}
{{--                    <li>--}}
{{--                        <h6>NOTIFICATIONS<span class="new badge">5</span></h6>--}}
{{--                    </li>--}}
{{--                    <li class="divider"></li>--}}
{{--                    <li><a class="grey-text text-darken-2" href="cards-extended.html#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>--}}
{{--                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>--}}
{{--                    </li>--}}
{{--                </ul>--}}
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
{{--                    <li><a class="grey-text text-darken-1" href="{{ route('home') }}"><i class="material-icons">person_outline</i> Profile</a></li>--}}
                    <li><a class="grey-text text-darken-1" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <i class="material-icons">keyboard_tab</i> Logout</a>


                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>


                </ul>
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input class="search-box-sm" type="search" required="">
                            <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </nav>
    </div>
</header>
