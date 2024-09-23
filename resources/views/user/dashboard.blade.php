<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>

    <x-slot name="header">Halaman Dashboard</x-slot>
    <x-slot name="sidebar">
        @include('user.sidebar')
    </x-slot>
    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><a href="#" data-coreui-i18n="home">Home</a>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Dashboard</span>
        </li>
    </x-slot>
    <div class="container-fluid col-lg-10 mb-3">
        <div class="card">
            <img src="{{ asset('assets/images/Setda.jpg') }}" class="card-img-top" alt="...">

            <div class="card-body">
                <h2 class="card-title">Perkantoran Rendah Karbon dan Berketahanan Iklim</h2>
                <p class="card-text">Tujuan Perkantoran Rendah Karbon dan Berketahanan Iklim adalah menumbuhkan budaya
                    dan
                    perilaku peduli lingkungan bagi setiap personil di lingkup pemerintah Provinsi Kalimantan Selatan
                    serta
                    efektivitas dan efisiensi kegiatan perkantoran berwawasan lingkungan dengan tidak mengurangi
                    kualitas
                    kerja agar para pegawai turut memberikan kontribusi terhadap upaya penanganan krisis iklim,
                    penghematan
                    konsumsi sumber daya dan mempromosikan gaya hidup ramah lingkungan di lingkungan kerja ataupun
                    tempat
                    tinggalnya masing-masing.</p>

            </div>
            <div class="card-footer text-body-secondary">

            </div>
        </div>
    </div>



</x-app-layout>
