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
                        <li class="breadcrumb-item active"><a href="">Data Pasien</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Data Pasien</li>
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
                        <form action="{{route('pasien.update', $pasien->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="nama_pasien">Nama Pasien</label>
                                        <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien" value="{{$pasien->nama_pasien}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="telp">No Telp</label>
                                        <input type="number" class="form-control" name="telp" autocomplete="off" placeholder="Nomor Telp" value="{{$pasien->telp}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <label class="form-control-label" for="no_telp">Rumah Sakit</label>
                                    <select name="id_rs" class="form-control pl-0 pr-0 pt-1">
                                        <option value="" style="text-align:center" disabled selected>--- Pilih Rumah Sakit ---</option>
                                        @foreach ($rs as $data)
                                        <option value="{{ $data->id }}" {{ $pasien->id_rs == $data->id ? 'selected' : '' }}>{{ $data->nama_rs }}</option>
                                        <!-- <option style="text-align:center" value="{{ $data->id }}">{{$data->nama_rs}}</option> -->
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-control-label" for="alamat">Alamat</label>
                                        <textarea type="text" class="form-control" name="alamat" autocomplete="off" placeholder="Alamat"> {{$pasien->alamat}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <a type="button" class="btn btn-raised btn-danger btn-round waves-effect" href="{{ url('pasien') }}">Batal</a>
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