@extends('Layout.main')

@section('content')
<div class="col-12 ps-4">
    <h4>>> Edit Data Jabatan</h4>
    <a href="/jabatan/index"class="btn btn-info btn-md p-2 mb-3">Kembali</a>
</div>
<div class="col-12 ps-4">
    <div class="col-12 bg-light p-2 rounded-3 shadow-sm">
        <form action="/jabatan/update/{{$jabatan->id}}"method="POST">
            @csrf
                <div class="mb-3 row"> 
                    <label for="inputPassword"class="col-sm-2 col-form-label">Nama Jabatan </label>
                    <div class="col-sm-10">
                        <input type="text"class="form-control"name="upah_lembur" value="{{$jabatan->upah_lembur}}">
                    </div>
                </div>
                <div class="d-grid text-end">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection