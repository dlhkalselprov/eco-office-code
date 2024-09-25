<x-app-layout>

    <x-slot name="title">Daftar Peserta</x-slot>

    <x-slot name="header">Halaman Daftar Peserta</x-slot>
    <x-slot name="sidebar">
        @include('admin.sidebar')
    </x-slot>

    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Daftar Peserta</span>
        </li>
    </x-slot>


    <div class="container">
        <div class="card">
            <div class="card-header">Daftar Peserta</div>
            <div class="card-body">
                {!! $dataTable->table(['class' => 'table table-bordered', 'id' => 'users-table']) !!}
            </div>
        </div>
    </div>


    @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush



</x-app-layout>
