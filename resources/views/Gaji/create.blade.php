@extends('Layout.main')

@section('content')
        <div class="col-12 ps-4">
            <h4>>> Tambah Data Gaji</h4>
            <a href="/Gaji/index" class="btn btn-info btn-md p-2 mb-3">Kembali</a>
        </div>
        <div class="col-12 ps-4">
        <div class="col-12 bg-light p-2 rounded-3 shadow-sm">
        <form action="/jabatan/store" method="POST">
@csrf
            <div class="mb-3 row">
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nama Karyawan</label>
        <div class="col-sm-10">
        <select class="form-control" name="karyawan">
            <option>Pilih Karyawan</option>
            <option>Fadel</option>
            <option>Rizki</option>
            <option>Saipul</option>
        </select>
        </div>
        </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Bulan</label>
            <div class="col-sm-10">
            <select class="form-control" name="bulan">
                <option>Pilih Bulan</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>November</option>
                <option>Desember</option>
            </select>
            </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sakit</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="sakit">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Izin</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="izin">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alpha</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="alpha">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Total Tunjangan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="tTunjangan">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Gaji Kotor</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gKotor">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Pajak</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="pajak">
                    </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Gaji Bersih</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gBersih">
                    </div>
            </div>
            <div class="d-grid text-end">
            <div class="col-sm-12">
            <button class="btn btn-primary btn-sm" type="submit">CREATE</button>
        </div>
        </div>
        </form>
        </div>
        </div>
@endsection