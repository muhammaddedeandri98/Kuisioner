@extends('layout/master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="card">
  <div class="card-body">
    <button type="button" class="btn btn-default"><a href="/divisi/create">+ &nbsp;Tambah Data</a></button>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>ID Divisi</th>
        <th>Nama Divisi</th>
        <th><center>Opsi</center></th>
      </tr>
      </thead>
        <?php $no=1;?>
        @foreach($data as $row)
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $row->id_divisi }}</td>
          <td>{{ $row->nama_divisi }}</td>
          <td><center>
              <a href="/divisi/detail/{{ $row->id_divisi }}" class="btn btn-xs btn-info" role="button" title="Detail Data"><i class="fas fa-eye"></i></a>
              <a href="{{url('/divisi/edit',$row->id_divisi)}}" class="btn btn-xs btn-primary" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
              <a href="/divisi/destroy/{{$row->id_divisi}}" class="btn btn-xs btn-danger" role="button" title="Hapus Data" onclick="return confirm('Anda yakin menghapus data ini?');"><i class="fas fa-trash"></i></a>
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