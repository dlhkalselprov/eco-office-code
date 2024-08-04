<x-app-layout>

    <x-slot name="title">Daftar Peserta</x-slot>

    <x-slot name="header">Halaman Daftar Peserta</x-slot>
    <x-slot name="sidebar">
        @include('user.sidebar')
    </x-slot>

    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Daftar Peserta</span>
        </li>
    </x-slot>





</x-app-layout>
