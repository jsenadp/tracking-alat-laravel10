@extends('master.master') @section('namacabang') Kirim Alat @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <form>
            <div class="row ">
                <div class="col">
                    <label for="formGroupExampleInput">Nama Alat</label>
                    <input type="text" class="form-control" name="nama_alat" placeholder="Nama Alat" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Serial Number</label>
                    <input type="text" class="form-control" name="serial_number" placeholder="Serial Number" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Project</label>
                    <input type="text" class="form-control" name="project" placeholder="Project" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Dari</label>
                    <select class="custom-select" name="dari_lokasi">
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
                    <select class="custom-select" name="ke_lokasi">
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
                    <input type="date" class="form-control" name="tgl_harus_kembali" placeholder="" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Tanggal Dikembalikan</label>
                    <input type="date" class="form-control" name="tgl_dikembalikan" placeholder="" />
                </div>
            </div>
            <hr class="border border-info">
            <br />
            <div id="form_dinamis"></div>
            <br />
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button type="button" class="btn btn-warning" id="tambahAlat">
                        +</button>&ensp;
                    <button type="button" class="btn btn-danger" id="hapusAlat">
                        -</button>&ensp;
                    <button type="submit" class="btn btn-success">
                        Kirim Alat
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var id = 0;
        $("#tambahAlat").click(function() {
            id++;
            $("#form_dinamis").append(`
            <div id="form_alat`+id+`">
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Nama Alat</label>
                    <input type="text" class="form-control" name="nama_alat[`+id+`]" placeholder="Nama Alat" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Serial Number</label>
                    <input type="text" class="form-control" name="serial_number[`+id+`]" placeholder="Serial Number" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Project</label>
                    <input type="text" class="form-control" name="project[`+id+`]" placeholder="Project" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan[`+id+`]" placeholder="Keterangan" />
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Dari</label>
                    <select class="custom-select" name="dari_lokasi[`+id+`]">
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
                    <select class="custom-select" name="ke_lokasi[`+id+`]">
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
                    <input type="date" class="form-control" name="tgl_harus_kembali[`+id+`]" placeholder="" />
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Tanggal Dikembalikan</label>
                    <input type="date" class="form-control" name="tgl_dikembalikan[`+id+`]" placeholder="" />
                </div>
            </div>
            <hr class="border border-info">
            </div>
            `);
        });
        $('#hapusAlat').click(function() {
            $('#form_alat'+id).remove();
            id--;
        })
    });

</script>
@endsection
