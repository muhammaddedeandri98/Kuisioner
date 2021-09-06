@extends('layout/master')

@section('content')
<body>
<div class="content-wrapper">
  <section class="content-header">
   </section>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Jenis User</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Id Jenis User</label>
                  <input type="text" class="form-control" name="id_jenis_user" value="{{$jenis_user->id_jenis_user}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Jenis User</label>
                  <input type="text" class="form-control" name="jenis_user" value="{{$jenis_user->jenis_user}}" readonly>
                </div>
                <!-- /.form-group -->
              <div class="text-right">
                  <a href="/jenis_user"><input type="button" value="Kembali" class="btn btn-primary"></a>
              </div>
            </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection