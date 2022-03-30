@extends('templates/head')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="card h-100 d-inline-block w-100" style="border: none;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ URL::to('assets/images/teramedik_logo.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">PT. Terakorp Indonesia (Perseroan) didirikan pada tanggal 28 November 2002
                            berdasarkan akta Pendirian Perseroan Terbatas No. 52 tanggal 28 November 2002. Memasuki tahun 2004,
                            perseroan mendapatkan penawaran untuk mengembangkan Sistem Informasi Rumah Sakit dari salah satu rumah sakit di Bogor,
                            dan dari semenjak itu perseroan memutuskan untuk terus mengembangkan aplikasi Sistem Informasi Rumah Sakit menjadi produk
                            andalan dengan merek dagang teraMedik
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection