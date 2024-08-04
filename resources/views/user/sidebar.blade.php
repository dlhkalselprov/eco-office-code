<div class="sidebar-header border-bottom">
    <div class="sidebar-brand">
        <div class="sidebar-brand-full">
            <img src="assets/brand/eco.png" class="img-thumbnail" style="max-width:100% ; height:auto;">
        </div>
        <div class="sidebar-brand-narrow" width="32" height="32">
            <img src="assets/brand/eco-office.png" class="img-thumbnail" style="max-width:100% ; height:auto;">

        </div>
    </div>
    <button class="btn-close d-lg-none" type="button" aria-label="Close"
        onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
</div>
<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg class="nav-icon">
                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
            </svg>
            <span data-coreui-i18n="dashboard">Dashboard</span>
        </x-nav-link>


    </li>
    <li class="nav-title" data-coreui-i18n="theme">Menu</li>
    <li class="nav-item">
        <x-nav-link :href="route('profile-user.index')" :active="request()->routeIs('profile-user.index')">
            <svg class="nav-icon">
                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
            </svg>
            <span data-coreui-i18n="colors">Profile User</span>
        </x-nav-link>
    </li>
    <li class="nav-item">
        <x-nav-link :href="route('input-data.index')" :active="request()->routeIs('input-data.index')">
            <svg class="nav-icon">
                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use>
            </svg>
            <span data-coreui-i18n="typography">Input Data</span>
        </x-nav-link>
    </li>
    <li class="nav-item">
        <x-nav-link :href="route('hasil-penilaian.index')" :active="request()->routeIs('hasil-penilaian.index')">
            <svg class="nav-icon">
                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-list-numbered-rtl"></use>
            </svg>
            <span data-coreui-i18n="typography">Hasil Penilaian</span>
        </x-nav-link>
    </li>

</ul>
<div class="sidebar-footer border-top d-none d-lg-flex">
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
