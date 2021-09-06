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
                <h3 class="card-title">Detail Cabang</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Id Cabang</label>
                  <input type="text" class="form-control" name="id_branch" value="{{$cabang->id_branch}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Kode Cabang</label>
                  <input type="text" class="form-control" name="code_branch" value="{{$cabang->code_branch}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Nama Cabang</label>
                  <input type="text" class="form-control" name="branch_name" value="{{$cabang->branch_name}}" readonly>
                </div>
                <div class="text-right">
                  <a href="/divisi"><input type="button" value="Kembali" class="btn btn-primary"></a>
                </div>
              </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection