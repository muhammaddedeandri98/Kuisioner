@extends('layout/master')

@section('content')
<body>
    <form method="post" action="/question/save"  enctype="multipart/form-data">
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
                <h3 class="card-title">Add Question</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlInput1" style="float:left;">Id Subject</label>
                    <input name="id_subject" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1" style="float:left;">Judul</label>
                    <input name="judul" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" style="float:left;">Jenis Question</label>
                  <select name="jenis" class="form-control select2bs4" style="width: 100%;" required>
                    <option selected="selected">Pilih Jenis Question</option>
                    <option>Easy</option>
                    <option>Medium</option>
                    <option>Hard</option>
                    <option>Very Hard</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Question</label>
                  <textarea name="question" class="form-control"  id="exampleFormControlTextarea1" rows="3"  required></textarea>
                </div>
              <div class="text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="/question"><input type="button" value="Kembali" class="btn btn-secondary"></a>
              </div>
            </div>
         </div>
       </div>
   </section>
  </form>
  </body>
@endsection