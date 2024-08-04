<x-app-layout>

    <x-slot name="title">Profile Instansi</x-slot>

    <x-slot name="header">Halaman Profile Instansi</x-slot>
    <x-slot name="sidebar">
        @include('user.sidebar')
    </x-slot>

    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Profile Instansi Anda</span>
        </li>
    </x-slot>



    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header" data-coreui-i18n="trafficAndSales">Profile Instansi SKPD</div>
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Nama Instansi/SKPD </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->nama_instansi }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->alamat_instansi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header" data-coreui-i18n="trafficAndSales">Profile Penanggung Jawab (Kepala) </div>
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Nama</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->nama_kepala }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Jabatan</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->jabatan_kepala }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Terdaftar pada</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ date('d F Y H:i:s', strtotime($user->created_at)) }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header" data-coreui-i18n="trafficAndSales">Profile Narubung (PIC)</div>
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Nama (PIC) </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->nama_pic }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Jabatan</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->jabatan_pic }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">No HP/WA</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted mb-0">: {{ $user->no_pic }}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" data-coreui-i18n="trafficAndSales">Foto Instansi </div>

                <div class="card-body">
                    <img src="..." class="card-img-top" alt="...">

                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-footer text-body-secondary text-center">
                    <a href="{{ route('profile-edit.edit') }}" class="btn btn-sm btn-outline-primary ">UBAH</a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
