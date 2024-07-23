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
                            <form action="{{ url("dosen/$dosen->nip") }}" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="dosen1">Nama dosen</label>
                                        <input type="text" name="nama" class="form-control" id="dosen1"
                                            value="{{ $dosen->nama }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="nip1">NIP dosen</label>
                                        <input type="text" name="nip" class="form-control" id="nip1"
                                            value="{{ $dosen->nip }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="jurusan1">Jurusan dosen</label>
                                        <input type="text" name="jurusan" class="form-control" id="jurusan1"
                                            value="{{ $dosen->jurusan }}">
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