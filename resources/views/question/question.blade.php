@extends('layout/master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-default"><a href="/question/create">+ &nbsp;Tambah Data</a></button>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>ID Question</th>
        <th>Id_Subject</th>
        <th>Question</th>
        <th>Jenis</th>
        <th>Judul</th>
        <th><center>Opsi</center></th>
      </tr>
      </thead>
        <?php $no=1;?>
        @foreach($question as $row)
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $row->id_question }}</td>
          <td>{{ $row->id_subject }}</td>
          <td>{{ $row->question }}</td>
          <td>{{ $row->jenis }}</td>
          <td>{{ $row->judul }}</td>
          <td><center>
              <a href="/question/detail/{{ $row->id_question }}" class="btn btn-xs btn-info" role="button" title="Detail Data"><i class="fas fa-eye"></i></a>
              <a href="{{url('/question/edit',$row->id_question)}}" class="btn btn-xs btn-primary" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
              <a href="/question/destroy/{{$row->id_question}}" class="btn btn-xs btn-danger" role="button" title="Hapus Data" onclick="return confirm('Anda yakin menghapus data ini?');"><i class="fas fa-trash"></i></a>
              </center>
          </td>
        </tr>
          <?php $no++?>
        @endforeach
    </table>
  </div>
  <!-- /.card-body -->
</div>
</section>
@endsection