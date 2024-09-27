<x-app-layout>

    <x-slot name="title">Proses Penilaian</x-slot>
    <x-slot name="costum_css">
        <link
            href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.7/af-2.7.0/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/cr-2.0.4/date-1.5.4/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.0/sp-2.3.2/sl-2.1.0/datatables.min.css"
            rel="stylesheet">
    </x-slot>
    <x-slot name="header">Halaman Proses Penilaian</x-slot>
    <x-slot name="sidebar">
        @include('admin.sidebar')
    </x-slot>

    <x-slot name="breadcrum">
        <li class="breadcrumb-item"><span data-coreui-i18n="dashboard">Menu</span>
        </li>
        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Proses Penilaian</span>
        </li>
    </x-slot>


    <!-- Modal -->
    <div class="modal fade" id="modal_lampiran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lampiran : <span id="modal-item-name"></span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">Proses Penilaian</div>
        <div class="card-body">
            <table id="example"class="dataTables_wrapper dt-bootstrap5 no-footer" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Instansi</th>
                        <th>Nama PIC</th>
                        {{-- <th>Status</th>
                        <th>Lampiran</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->nama_instansi }}</td>
                            <td>{{ $user->nama_pic }}</td>
                            {{-- <td>status</td>
                            <td><button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal"
                                    data-bs-target="#modal_lampiran"
                                    data-name="{{ $user->nama_instansi }}">Lampiran</button></td> --}}

                            <td><a href="{{ route('proses-penilaian.show', ['id' => Crypt::encryptString($user->id)]) }}"
                                    class="btn btn-sm btn-outline-success">Lihat</a></td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Instansi</th>
                        <th>Nama PIC</th>
                        {{-- <th>Status</th>
                        <th>Lampiran</th> --}}
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
    <x-slot name="costum_js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script
            src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.7/af-2.7.0/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/cr-2.0.4/date-1.5.4/r-3.0.3/rr-1.5.0/sc-2.4.3/sb-1.8.0/sp-2.3.2/sl-2.1.0/datatables.min.js">
        </script>
        <script>
            $(document).ready(function() {

                new DataTable('#example');
            });
        </script>
        <script>
            $('#modal_lampiran').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Tombol yang diklik

                var name = button.data('name'); // Ambil Name dari atribut data-name

                // Isi data modal dengan data dari tombol
                var modal = $(this);
                modal.find('#modal-item-name').text(name);
            });
        </script>
    </x-slot>

</x-app-layout>
