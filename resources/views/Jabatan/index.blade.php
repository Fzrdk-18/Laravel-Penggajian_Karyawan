@extends('Layout.main')

 @section('content')
    <div class="col-12 ps-4">
        <h4>>> Data Jabatan</h4>
        <a href="/Jabatan/create" class="btn btn-info btn-md p-2 mb-3">Tambah Data</a>
    </div>
    <div class="col-12 ps-4">
        <div class="table-responsive-md">
            <table class="table table-striped-responsive text-start">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Jabatan</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Upah Lembur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/Jabatan/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="return
                    confirm('Sure ?')">Delete</a></td>
            </tbody>
         </table>
    </div>

    @endsection