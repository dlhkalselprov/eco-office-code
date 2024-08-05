<x-app-layout>

    <x-slot name="title">Ubah Profile Instansi</x-slot>

    <x-slot name="header">Halaman Ubah Profile Instansi</x-slot>
    <x-slot name="sidebar">
        @include('user.sidebar')
    </x-slot>

    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Profile Instansi Anda</span>
        </li>
    </x-slot>

    <form method="POST" action="{{ route('profile-edit.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
                                    <div class="col-sm-8">
                                        <input id="nama_instansi" type="text" name="nama_instansi"
                                            value="{{ old('nama_instansi', $user->nama_instansi) }}"
                                            class="form-control form-control-sm  
                                            @if (old('nama_instansi', $user->nama_instansi)) is-valid
                                             @elseif($errors->has('nama_instansi')) is-invalid @endif">
                                        @error('nama_instansi')
                                            <div id="nama_instansi" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="email" type="text" name="email"
                                            value="{{ old('email', $user->email) }}"
                                            class="form-control form-control-sm   @if ($errors->has('email')) is-invalid 
                                             @elseif (old('email', $user->email)) is-valid @endif">
                                        @error('email')
                                            <div id="email" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Alamat</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea name="alamat_instansi"
                                            class="form-control @if (old('alamat_instansi', $user->alamat_instansi)) is-valid
                                             @elseif($errors->has('alamat_instansi')) is-invalid @endif"
                                            rows="3">{{ old('alamat_instansi', $user->alamat_instansi) }}</textarea>
                                        @error('alamat_instansi')
                                            <div id="alamat_instansi" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
                                    <div class="col-sm-8">
                                        <input id="nama_kepala" type="text" name="nama_kepala"
                                            value="{{ old('nama_kepala', $user->nama_kepala) }}"
                                            class="form-control form-control-sm  
                                            @if (old('nama_kepala', $user->nama_kepala)) is-valid
                                             @elseif($errors->has('nama_kepala')) is-invalid @endif">
                                        @error('nama_kepala')
                                            <div id="nama_kepala" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Jabatan</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="jabatan_kepala" type="text" name="jabatan_kepala"
                                            value="{{ old('jabatan_kepala', $user->jabatan_kepala) }}"
                                            class="form-control form-control-sm  
                                            @if (old('jabatan_kepala', $user->jabatan_kepala)) is-valid
                                             @elseif($errors->has('jabatan_kepala')) is-invalid @endif">
                                        @error('jabatan_kepala')
                                            <div id="jabatan_kepala" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Terdaftar pada</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-muted mb-0">:
                                            {{ date('d F Y H:i:s', strtotime($user->created_at)) }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Terakhir diubah</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-muted mb-0">:
                                            {{ date('d F Y H:i:s', strtotime($user->updated_at)) }}
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
                                    <div class="col-sm-8">
                                        <input id="nama_pic" type="text" name="nama_pic"
                                            value="{{ old('nama_pic', $user->nama_pic) }}"
                                            class="form-control form-control-sm  
                                            @if (old('nama_pic', $user->nama_pic)) is-valid
                                             @elseif($errors->has('nama_pic')) is-invalid @endif">
                                        @error('nama_pic')
                                            <div id="nama_pic" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Jabatan</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="jabatan_pic" type="text" name="jabatan_pic"
                                            value="{{ old('jabatan_pic', $user->jabatan_pic) }}"
                                            class="form-control form-control-sm  
                                            @if (old('jabatan_pic', $user->jabatan_pic)) is-valid
                                             @elseif($errors->has('jabatan_pic')) is-invalid @endif">
                                        @error('jabatan_pic')
                                            <div id="jabatan_pic" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">No HP/WA</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="no_pic" type="text" name="no_pic"
                                            value="{{ old('no_pic', $user->no_pic) }}"
                                            class="form-control form-control-sm  
                                            @if ($errors->has('no_pic')) is-invalid
                                             @elseif (old('no_pic', $user->no_pic)) is-valid @endif">
                                        @error('no_pic')
                                            <div id="no_pic" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" data-coreui-i18n="trafficAndSales">Unggah Foto Instansi </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto Pertama</label>
                            <input name="photo_1" class="form-control" type="file" id="formFile">
                            @error('photo_1')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto Kedua</label>
                            <input name="photo_2" class="form-control" type="file" id="formFile">
                            @error('photo_2')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto Ketiga</label>
                            <input name="photo_3" class="form-control" type="file" id="formFile">
                            @error('photo_3')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row my-3">
            <div class="col">
                <div class="card">
                    <div class="card-footer text-body-secondary text-center">
                        <button type="submit" class="btn btn-sm btn-outline-success">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>


    </form>


</x-app-layout>
