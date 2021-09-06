@extends('layout/master')

@section('content')
<body>
    <form method="post" action="/jenis_user/save"  enctype="multipart/form-data">
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
                <h3 class="card-title">Tambah Jenis User</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Jenis User</label>
                  <input type="text" class="form-control" name="jenis_user" autocomplete="off" required>
                </div>
              <div class="text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/jenis_user"><input type="button" value="Kembali" class="btn btn-secondary"></a>
              </div>
            </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection