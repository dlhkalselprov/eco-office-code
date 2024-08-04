<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>

    <x-slot name="header">Halaman Dashboard</x-slot>
    <x-slot name="sidebar">
        @include('layout.sidebar')
    </x-slot>
    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><a href="#" data-coreui-i18n="home">Home</a>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Dashboard</span>
        </li>
    </x-slot>




</x-app-layout>
