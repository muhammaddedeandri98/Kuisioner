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
                <h3 class="card-title">Detail User</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Id User</label>
                  <input type="text" class="form-control" name="id_user" value="{{$user->id_user}}" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Username</label>
                  <input type="text" class="form-control" name="username" value="{{$user->username}}" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Password</label>
                  <input type="text" class="form-control" name="password" value="{{$user->password}}" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Status</label>
                  <select name="status" class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">{{$user->status}}</option>
                    <option>Aktif </option>
                    <option>Tidak Aktif</option>
                  </select>
                </div>
                <!-- /.form-group -->
              <div class="text-right">
                  <a href="/user"><input type="button" value="Kembali" class="btn btn-primary"></a>
              </div>
            </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection