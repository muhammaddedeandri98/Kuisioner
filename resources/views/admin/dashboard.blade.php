@extends('layout/master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
</section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">
                  {{$jumlah_user}}
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Jenis user</span>
                <span class="info-box-number">{{$jumlah_jenis_user}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-code-branch"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cabang</span>
                <span class="info-box-number">{{$jumlah_cabang}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-divide"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Divisi</span>
                <span class="info-box-number">{{$jumlah_divisi}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Laporan Perbulan</h5>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong></strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                    </p>

                    <div class="progress-group">
                      Jumlah User
                      <span class="float-right"><b>{{$jumlah_user}}</b>/100</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: {{$jumlah_user}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Jumlah Cabang
                      <span class="float-right"><b>{{$jumlah_cabang}}</b>/100</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: {{$jumlah_cabang}}%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Jumlah Divisi</span>
                      <span class="float-right"><b>{{$jumlah_divisi}}</b>/100</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: {{$jumlah_divisi}}%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Jumlah Jenis User
                      <span class="float-right"><b>{{$jumlah_jenis_user}}</b>/100</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width:{{$jumlah_jenis_user}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> {{$jumlah_user}}%</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text">TOTAL User</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> {{$jumlah_jenis_user}}%</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text">TOTAL JENIS USER</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>{{$jumlah_cabang}}%</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text">TOTAL CABANG</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> {{$jumlah_divisi}}%</span>
                      <h5 class="description-header"></h5>
                      <span class="description-text">TOTAL DIVISI</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </section>
@endsection