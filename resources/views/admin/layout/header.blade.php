<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                        <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                        <!--     i.ficon.feather.icon-menu-->
                        <li class="nav-item d-none d-lg-block">
                            {{ now()->translatedFormat('l, d F Y ') }}
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">

{{--                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>--}}
                        <li class="dropdown dropdown-user nav-item" style="margin-top: 0.4rem;">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data--toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Иванов А.И.</span><span class="user-status">abs@mail.ru</span></div><span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="feather icon-user"></i> Ваш профиль</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="feather icon-power"></i> Выход</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link pr-2" href="#"><i class="fa fa-sign-out" style="font-size: 1.5rem;" title="Выход"></i></a>
                        </li>

                </ul>
            </div>
        </div>
    </div>
</nav>

