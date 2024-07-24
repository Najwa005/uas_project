  @extends('template.main')

  @section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">Dashboard</h1>
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
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <h3></h3>
                                  <p>Data Mahasiswa</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person"></i>
                              </div>
                              <a href="{{ url('mahasiswa') }}" class="small-box-footer">More info <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3><sup style="font-size: 20px"></sup></h3>

                                  <p>Program Studi</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="{{ url('prodi') }}" class="small-box-footer">More info <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Data Dosen</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="{{ url('dosen') }}" class="small-box-footer">More info <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                  </div><!-- /.container-fluid -->
                  <div class="container-fluid">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">
                          <!-- ./col -->
                          <div class="col-lg-4 col-6">
                              <!-- small box -->
                              <div class="small-box bg-danger">
                                  <div class="inner">
                                      <h3></h3>

                                      <p>Data Mata Kuliah</p>
                                  </div>
                                  <div class="icon">
                                      <i class="ion ion-pie-graph"></i>
                                  </div>
                                  <a href="{{ url('matkul') }}" class="small-box-footer">More info <i
                                          class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <!-- ./col -->
                          <div class="col-lg-4 col-6">
                              <!-- small box -->
                              <div class="small-box bg-secondary">
                                  <div class="inner">
                                      <h3></h3>

                                      <p>Data Nilai</p>
                                  </div>
                                  <div class="icon">
                                      <i class="ion ion-stats-bars"></i>
                                  </div>
                                  <a href="{{ url('nilai') }}" class="small-box-footer">More info <i
                                          class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <!-- ./col -->
                          <div class="col-lg-4 col-6">
                              <!-- small box -->
                              <div class="small-box bg-primary">
                                  <div class="inner">
                                      <h3></h3>

                                      <p>Data Jadwal Mata Kuliah</p>
                                  </div>
                                  <div class="icon">
                                      <i class="ion ion-pie-graph"></i>
                                  </div>
                                  <a href="{{ url('jadwal') }}" class="small-box-footer">More info <i
                                          class="fas fa-arrow-circle-right"></i></a>
                              </div>
                          </div>
                          <!-- ./col -->
                      </div>
                      <!-- /.row -->
                      <!-- Main row -->

                      <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      <!-- Content Wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      </div>
      <!-- Content wrapper -->
  @endsection
