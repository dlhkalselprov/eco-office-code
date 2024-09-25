<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>

    <x-slot name="header">Halaman Dashboard</x-slot>
    <x-slot name="sidebar">
        @include('admin.sidebar')
    </x-slot>
    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><a href="#" data-coreui-i18n="home">Home</a>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Dashboard</span>
        </li>
    </x-slot>
    <div class="col-lg-8 col-xl-3 col-xxl-2">
        <div class="card">
            <div class="card-body">
                <div class="text-body-secondary text-end">
                    <svg class="icon icon-xxl">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                    </svg>
                </div>
                <div class="fs-4 fw-semibold">{{ $user }}</div>
                <div class="small text-body-secondary text-uppercase fw-semibold text-truncate">Pendaftar</div>
                <div class="progress progress-thin mt-3 mb-0">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
