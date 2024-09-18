@extends('master.master')

@section('namacabang')
Kirim Alat
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <form>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Nama Alat</label>
                    <input type="text" class="form-control" placeholder="Nama Alat">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Serial Number</label>
                    <input type="text" class="form-control" placeholder="Serial Number">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Project</label>
                    <input type="text" class="form-control" placeholder="Project">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Dari</label>
                    <select class="custom-select">
                        <option selected>Pilih Lokasi</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Balikpapan">Balikpapan</option>
                        <option value="Palembang">Palembang</option>
                        <option value="Jambi">Jambi</option>
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Ke</label>
                    <select class="custom-select">
                        <option selected>Pilih Lokasi</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Balikpapan">Balikpapan</option>
                        <option value="Palembang">Palembang</option>
                        <option value="Jambi">Jambi</option>
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Harus Kembali Sebelum</label>
                    <input type="date" class="form-control" placeholder="">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Tanggal Dikembalikan</label>
                    <input type="date" class="form-control" placeholder="">
                </div>
            </div>
            <br>
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Kirim Alat</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
