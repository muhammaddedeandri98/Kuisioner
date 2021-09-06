@extends('layout/master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-default"><a href="/jenis_user/create">+ &nbsp;Tambah Data</a></button>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>ID Jenis User</th>
        <th>Jenis User</th>
        <th><center>Opsi</center></th>
      </tr>
      </thead>
        <?php $no=1;?>
        @foreach($data as $row)
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $row->id_jenis_user }}</td>
          <td>{{ $row->jenis_user }}</td>
          <td><center>
              <a href="/jenis_user/detail/{{ $row->id_jenis_user }}" class="btn btn-xs btn-info" role="button" title="Ubah Data"><i class="fas fa-eye"></i></a>
              <a href="/jenis_user/edit/{{ $row->id_jenis_user }}" class="btn btn-xs btn-primary" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
              <a href="/jenis_user/destroy/{{$row->id_jenis_user}}" class="btn btn-xs btn-danger" role="button" title="Hapus Data" onclick="return confirm('Anda yakin menghapus data ini?');"><i class="fas fa-trash"></i></a>
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