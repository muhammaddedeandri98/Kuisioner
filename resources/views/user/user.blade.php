@extends('layout/master')

@section('content')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<!-- Content Header (Page header) -->
<section class="content-header">

<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-default"><a href="/user/create">+ &nbsp;Tambah Data</a></button>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>ID User</th>
        <th>Username</th>
        <th>Password</th>
        <th>Status</th>
        <th><center>Opsi</center></th>
      </tr>
      </thead>
        <?php $no=1;?>
        @foreach($data as $row)
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $row->id_user }}</td>
          <td>{{ $row->username }}</td>
          <td>{{ $row->password }}</td>
          <td>{{ $row->status }}</td>
          <td><center>
              <a href="/user/detail/{{ $row->id_user }}" class="btn btn-xs btn-info" role="button" title="Ubah Data"><i class="fas fa-eye"></i></a>
              <a href="/user/edit/{{ $row->id_user }}" class="btn btn-xs btn-primary" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
              <a href="/user/destroy/{{$row->id_user}}" class="btn btn-xs btn-danger" role="button" title="Hapus Data" onclick="return confirm('Anda yakin menghapus data ini?');"><i class="fas fa-trash"></i></a>
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