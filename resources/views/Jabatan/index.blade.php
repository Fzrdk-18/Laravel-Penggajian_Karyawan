@extends('Layout.main')

@section('content')
    <div class="col-12 ps-4">
        <h4>>> Data Jabatan</h4>
        <a href="/jabatan/create" class="btn btn-info btn-md p-2 mb-3">Tambah Data</a>
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
                @foreach (@jabatans as $jabatan)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $jabatan->nama_jabatan }}</td>
                        <td>{{ $jabatan->jumlah_gaji_pokok }}</td>    
                        <td>{{ $jabatan->upah_lembur }}</td>
                        <td>
                            <a href="/jabatan/edit/{{ $jabatan->id }}" class="btn btn-warning btn-sm">Edit</a>"
                            <a href="#"class="btnbtn-danger btn-sm" onclick="return confirm('Sure ?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
               
                @endsection
