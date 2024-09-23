<x-app-layout>
    <x-slot name="title">Hasil Penilaian</x-slot>

    <x-slot name="header">Halaman Daftar Hasil Penilaian</x-slot>
    <x-slot name="sidebar">
        @include('user.sidebar')
    </x-slot>
    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Hasil Penilaian</span>
        </li>
    </x-slot>


    <div class="card text-center">
        <div class="card-header">
            Coming Soon
        </div>
        <div class="card-body">
            <h5 class="card-title">Kami sedang memproses Tahap Penilaian</h5>
            <p class="card-text">Harap tunggu informasi dari kami lebih lanjut.</p>

        </div>
        <div class="card-footer text-body-secondary">
            mohon maaf atas keterlambatannya
        </div>

    </div>

</x-app-layout>
