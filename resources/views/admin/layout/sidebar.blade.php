<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.profile') }}">
                    {{--                    <div class="brand-logo"></div>--}}
                    <h2 class="brand-text mb-0 pl-5">Админ</h2>
                </a>
            </li>
            {{--            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>--}}
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a
                    href="{{ route('admin.users.index') }}" class="if-pb-0"><i class="feather icon-user"></i>
                    <span class="menu-title">Пользователи</span></a>
            </li>
            <li class=" nav-item"><a
                    href="{{ route('admin.profile') }}" class="if-pb-0"><i class="feather icon-user"></i>
                    <span class="menu-title">Ваш профиль</span></a>
            </li>
        </ul>
    </div>
</div>
