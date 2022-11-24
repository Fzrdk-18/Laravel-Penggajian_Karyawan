@extends('Layout.main')

@section('content')
<div class="col-12 ps-4">
<h4>>> Data Karyawan</h4>
<a href="/Karyawan/create" class="btn btn-info btn-md p-2 mb-3">Tambah Data</a>
</div>
<div class="col-12 ps-4">
<div class="table-responsive-md">
<table class="table table-striped-responsive text-start">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">ID Jabatan</th>
<th scope="col">Nama Karyawan</th>
<th scope="col">Alamat</th>
<th scope="col">No Handphone</th>
<th scope="col">Tempat Lahir</th>
<th scope="col">Tanggal Lahir</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col">Status</th>
<th scope="col">Jumlah Anak</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
<a href="/Karyawan/edit/" class="btn btn-warning btn-sm">Edit</a>
<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure ?')">Delete</a>
</td>
</tr>
</tbody>
</table>
</div>
@endsection