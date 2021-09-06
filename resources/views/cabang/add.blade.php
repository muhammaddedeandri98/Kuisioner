@extends('layout/master')

@section('content')
<body>
    <form method="post" action="/cabang/save"  enctype="multipart/form-data">
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
                <h3 class="card-title">Tambah Cabang</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Kode Cabang</label>
                  <input type="text" class="form-control" name="code_branch" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Nama Cabang</label>
                  <input type="text" class="form-control" name="branch_name" autocomplete="off" required>
                </div>
                <!-- /.form-group -->
              <div class="text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/cabang"><input type="button" value="Kembali" class="btn btn-secondary"></a>
              </div>
            </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection