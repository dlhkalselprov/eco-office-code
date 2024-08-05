<div class="container-fluid px-4 border-bottom">
    <button class="header-toggler" type="button"
        onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"
        style="margin-inline-start: -14px">
        <svg class="icon icon-lg">
            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
        </svg>
    </button>
    <ul class="header-nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="#" data-coreui-i18n="dashboard">{{ $header }}</a></li>
        {{-- <li class="nav-item"><a class="nav-link" href="#" data-coreui-i18n="users">Users</a></li>
               <li class="nav-item"><a class="nav-link" href="#" data-coreui-i18n="settings">Settings</a> --}}
        </li>
    </ul>
    <ul class="header-nav d-none d-md-flex ms-auto">


    </ul>
    <ul class="header-nav ms-auto ms-md-0">

        <li class="nav-item py-1">
            <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/user.png" alt="user@email.com">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                    data-coreui-i18n="account">Account</div><a class="dropdown-item" href="#">

                    <a class="dropdown-item" href="{{ route('profile-user.index') }}">
                        <svg class="icon me-2">
                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                        </svg><span data-coreui-i18n="profile">Profile</span>
                    </a>

                    <div class="dropdown-divider">
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();
                    this.closest('form').submit();">
                            <svg class="icon me-2">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout">
                                </use>
                            </svg><span data-coreui-i18n="logout">Logout</span>
                        </a>
                    </form>



            </div>
        </li>
    </ul>

</div>
