@extends('templates/head')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"><a href="">Data Rumah Sakit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Data Rumah Sakit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr />
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('rumahsakit.update', $rs->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="nama_rs">Nama Rumah Sakit</label>
                                        <input type="text" class="form-control" name="nama_rs" placeholder="Nama Rumah Sakti" value="{{$rs->nama_rs}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="telp">No Telp</label>
                                        <input type="number" class="form-control" name="telp" autocomplete="off" placeholder="Nomor Telp" value="{{$rs->telp}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="email">Email</label>
                                        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email" value="{{$rs->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="alamat">Alamat</label>
                                        <textarea type="text" class="form-control" name="alamat" autocomplete="off" placeholder="Alamat"> {{$rs->alamat}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <a type="button" class="btn btn-raised btn-danger btn-round waves-effect" href="{{ url('rumahsakit') }}">Batal</a>
                                <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection