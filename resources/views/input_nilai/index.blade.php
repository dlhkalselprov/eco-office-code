<x-app-layout>

    <x-slot name="title">Input Penilaian</x-slot>

    <x-slot name="header">Halaman Input Penilaian</x-slot>
    <x-slot name="sidebar">
        @include('user.sidebar')
    </x-slot>

    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Input Penilaian Anda</span>
        </li>
    </x-slot>



    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header"><strong>FORM ASSESMENT MANDIRI</strong></div>
                <div class="card-body">
                    <h5 class="text-body-secondary text-center"><strong>INDIKATOR PENILAIAN PERKANTORAN RAMAH
                            LINGKUNGAN LINGKUP INSTANSI DAERAH PROVINSI KALIMANTAN SELATAN</strong></h5>
                    <hr>
                    <h6>Nama Instansi : </h6>


                    <div class="accordion mt-3" id="accordionExample">
                        @include('input_nilai.1')
                        @include('input_nilai.2')
                        @include('input_nilai.3')
                        @include('input_nilai.4')
                        @include('input_nilai.5')
                        @include('input_nilai.6')
                        @include('input_nilai.7')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row my-3">
        <div class="col">
            <div class="card mb-3">
                <div class="card-footer text-body-secondary text-center">
                    <a href="{{ route('profile-edit.edit') }}" class="btn btn-sm btn-outline-primary ">UBAH</a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
