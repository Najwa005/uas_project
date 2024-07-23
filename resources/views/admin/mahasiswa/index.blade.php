@extends('template.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Mahasiswa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Mahasiswa</h3>
                                @can('admin')
                                    <div class="card-tools">
                                        <div class="card-tools">
                                            <a href="/mahasiswa/create" class="btn btn-primary">Tambah</a>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>No Handphone</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            @can('admin')
                                                <th>Aksi</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswa as $m)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $m->nim }}</td>
                                                <td>{{ $m->nama }}</td>
                                                <td>{{ $m->prodi->nama_prodi }}</td>
                                                <td>{{ $m->no_hp }}</td>
                                                <td>{{ $m->alamat }}</td>
                                                <td>
                                                    @if ($m->foto)
                                                        <img src="{{ asset('storage/' . $m->foto) }}" alt="Foto Mahasiswa"
                                                            class="h-10" style="max-width: 150px; max-height: 150px;">
                                                    @else
                                                        <p>Tidak ada foto</p>
                                                    @endif
                                                </td>
                                                @can('admin')
                                                    <td>
                                                        <a href="{{ url("mahasiswa/$m->nim/edit") }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <form action="{{ url("mahasiswa/$m->nim") }}" method="POST"
                                                            class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-danger delete-btn"
                                                                data-nim="{{ $m->nim }}">Hapus</button>
                                                        </form>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection
@section('scripts')
    <script>
        // Event listener untuk tombol hapus 
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var nim = button.getAttribute('data-nim');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data mahasiswa dengan NIM " + nim + " akan dihapus!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit form untuk menghapus data
                            var form = button.closest('form');
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection"
