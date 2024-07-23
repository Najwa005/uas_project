@extends('template.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Mata Kuliah</h1>
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
                                <h3 class="card-title">Edit Data Mata Kuliah</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url("jadwal/$jadwal->id") }}" method="post">
                                @method('put')
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="semester">semester</label>
                                        <input type="text" class="form-control" id="semester" name="semester"
                                            value="{{ $jadwal->semester }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="mata_kuliah_id">Nama Mata kuliah</label>
                                        <select class="form-control" id="mata_kuliah_id" name="mata_kuliah_id">
                                            @foreach ($mataKuliahs as $mataKuliah)
                                                <option value="{{ $mataKuliah->id }}"
                                                    {{ $jadwal->mata_kuliah_id == $mataKuliah->id ? 'selected' : '' }}>
                                                    {{ $mataKuliah->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="hari">hari</label>
                                        <input type="text" class="form-control" id="hari" name="hari"
                                            value="{{ $jadwal->hari }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="ruangan">ruangan</label>
                                        <input type="text" class="form-control" id="ruangan" name="ruangan"
                                            value="{{ $jadwal->ruangan }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="jam_mulai">jam mulai</label>
                                        <input type="text" class="form-control" id="jam_mulai" name="jam_mulai"
                                            value="{{ $jadwal->jam_mulai }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="jam_selesai">jam selesai</label>
                                        <input type="text" class="form-control" id="jam_selesai" name="jam_selesai"
                                            value="{{ $jadwal->jam_selesai }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="dosen_id">Nama Dosen</label>
                                        <select class="form-control" id="dosen_id" name="dosen_nip">
                                            @foreach ($dosens as $dosen)
                                                <option value="{{ $dosen->nip }}"
                                                    {{ $jadwal->dosen_nip == $dosen->nip ? 'selected' : '' }}>
                                                    {{ $dosen->nama }}
                                                </option>
                                            @endforeach
                                        </select>
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
