@extends('template.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Dosen</h1>
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
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Dosen</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url("nilai/$nilai->id") }}" method="post">
                                @method('put')
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="mahasiswa_id">Nama Mahasiswa</label>
                                        <select class="form-control" id="mahasiswa_id" name="mahasiswa_nim">
                                            @foreach ($mahasiswas as $mahasiswa)
                                                <option value="{{ $mahasiswa->nim }}"
                                                    {{ $nilai->mahasiswa_nim == $mahasiswa->nim ? 'selected' : '' }}>
                                                    {{ $mahasiswa->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="dosen_id">Nama Dosen</label>
                                        <select class="form-control" id="dosen_id" name="dosen_nip">
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->nip }}"
                                                    {{ $nilai->dosen_nip == $dosen->nip ? 'selected' : '' }}>
                                                    {{ $dosen->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="mata_kuliah_id">Nama Mata kuliah</label>
                                        <select class="form-control" id="mata_kuliah_id" name="mata_kuliah_id">
                                            @foreach ($mataKuliahs as $mataKuliah)
                                                <option value="{{ $mataKuliah->id }}"
                                                    {{ $nilai->mata_kuliah_id == $mataKuliah->id ? 'selected' : '' }}>
                                                    {{ $mataKuliah->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nilai">Nilai</label>
                                        <input type="text" class="form-control" id="nilai" name="nilai"
                                            value="{{ $nilai->nilai }}">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
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
