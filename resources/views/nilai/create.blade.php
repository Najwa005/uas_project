@extends('template.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Nilai</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb afloat-sm-right">
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
                                <h3 class="card-title">Tambah Nilai</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('nilai') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="mahasiswa1">Nama Mahasiswa</label>
                                        <select class="form-control @error('mahasiswa') is-invalid @enderror"
                                            id="mahasiswa_nim" name="mahasiswa_nim">
                                            @foreach ($mahasiswas as $mahasiswa)
                                                <option value="{{ $mahasiswa->nim }}">{{ $mahasiswa->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('mahasiswa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="dosen1">Nama dosen</label>
                                        <select class="form-control @error('dosen') is-invalid @enderror" id="dosens_nip"
                                            name="dosens_nip">
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->nip }}">{{ $dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('dosen')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="matkul">Mata Kuliah</label>
                                        <select class="form-control @error('matkul') is-invalid @enderror"
                                            id="mata_kuliah_id" name="mata_kuliah_id">
                                            @foreach ($mataKuliahs as $mataKuliah)
                                                <option value="{{ $mataKuliah->id }}">{{ $mataKuliah->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('matkul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nilai1">Nilai</label>
                                        <input type="text" name="nilai"
                                            class="form-control @error('nilai') is-invalid @enderror" id="nilai"
                                            placeholder="Masukkan Nilai">
                                        @error('nilai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- /.card-body -->
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
