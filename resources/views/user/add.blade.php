@extends('layout/master')

@section('content')
<body>
    <form method="post" action="/user/save"  enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="content-wrapper">
    <section class="content-header">
    </section>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Username</label>
                  <input type="text" class="form-control" name="username" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Password</label>
                  <input type="text" class="form-control" name="password" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Status</label>
                  <select name="status" class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">Pilih Status</option>
                    <option>Aktif </option>
                    <option>Tidak Aktif</option>
                  </select>
                </div>
                <!-- /.form-group -->
              <div class="text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/user"><input type="button" value="Kembali" class="btn btn-secondary"></a>
              </div>
            </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection