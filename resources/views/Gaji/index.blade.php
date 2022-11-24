@extends('Layout.main')

@section('content')
<div class="col-12 ps-4">
<h4>>> Data Gaji</h4>
<a href="/Gaji/create" class="btn btn-info btn-md p-2 mb-3">Tambah Data</a>
</div>
<div class="col-12 ps-4">
<div class="table-responsive-md">
<table class="table table-striped-responsive text-start">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">ID Karyawan</th>
<th scope="col">Nama Karyawan</th>
<th scope="col">Bulan</th>
<th scope="col">Sakit</th>
<th scope="col">Izin</th>
<th scope="col">Alpha</th>
<th scope="col">Total Tunjangan</th>
<th scope="col">Gaji Kotor</th>
<th scope="col">Pajak</th>
<th scope="col">Gaji Bersih</th>
<th scope="col">Created </th>
<th scope="col">Updated </th>
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
<td></td>
<td></td>
<td></td>
<td>
<a href="/Gaji/edit/" class="btn btn-warning btn-sm">Edit</a>
<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure ?')">Delete</a>
</td>
</tr>
</tbody>
</table>
</div>
@endsection