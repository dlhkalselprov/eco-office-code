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
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                        alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                    data-coreui-i18n="account">Account</div><a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                    </svg><span data-coreui-i18n="updates">Updates</span><span
                        class="badge badge-sm bg-info-gradient ms-2">42</span></a><a class="dropdown-item"
                    href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open">
                        </use>
                    </svg><span data-coreui-i18n="messages">Messages</span><span
                        class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a class="dropdown-item"
                    href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                    </svg><span data-coreui-i18n="tasks">Tasks</span><span
                        class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a class="dropdown-item"
                    href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square">
                        </use>
                    </svg><span data-coreui-i18n="comments">Comments</span><span
                        class="badge badge-sm bg-warning-gradient ms-2">42</span>
                </a>
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2"
                    data-coreui-i18n="settings">Settings</div>
                <a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                    </svg><span data-coreui-i18n="profile">Profile</span>
                </a>
                <a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                    </svg><span data-coreui-i18n="settings">Settings</span>
                </a>
                <a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card">
                        </use>
                    </svg><span data-coreui-i18n="payments">Payments</span><span
                        class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                    </svg><span data-coreui-i18n="projects">Projects</span><span
                        class="badge badge-sm bg-primary-gradient ms-2">42</span>
                </a>
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked">
                        </use>
                    </svg><span data-coreui-i18n="lockAccount">Lock Account</span>
                </a>
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
