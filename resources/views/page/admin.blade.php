@extends('master.master')

@section('namacabang')
Admin Page | Tracking Alat Pekerjaan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <a href="/kirimalat" class="btn btn-success">
                <h2>Kirim Alat&ensp;<i class="bi bi-scooter"></i></h2>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Cirebon</h3>
                    <p class="fs-3">10 Alat</p>
                </div>
                <div class="icon">
                    <i class="bi bi-tools" style="font-size: 3rem"></i>
                </div>
                <a href="/cabcirebon" class="small-box-footer">See More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Surabaya</h3>
                    <p class="fs-3">10 Alat</p>
                </div>
                <div class="icon">
                    <i class="bi bi-tools" style="font-size: 3rem"></i>
                </div>
                <a href="/cabsurabaya" class="small-box-footer">See More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Balikpapan</h3>
                    <p class="fs-3">10 Alat</p>
                </div>
                <div class="icon">
                    <i class="bi bi-tools" style="font-size: 3rem"></i>
                </div>
                <a href="/cabbalikpapan" class="small-box-footer">See More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Palembang</h3>
                    <p class="fs-3">10 Alat</p>
                </div>
                <div class="icon">
                    <i class="bi bi-tools" style="font-size: 3rem"></i>
                </div>
                <a href="/cabpalembang" class="small-box-footer">See More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Jambi</h3>
                    <p class="fs-3">10 Alat</p>
                </div>
                <div class="icon">
                    <i class="bi bi-tools" style="font-size: 3rem"></i>
                </div>
                <a href="/cabjambi" class="small-box-footer">See More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
