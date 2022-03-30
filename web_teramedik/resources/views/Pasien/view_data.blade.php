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
                        <li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="pb-2">
                    <!-- <a type="button" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-sm btn-primary btn-round"><i class=""></i> Tambah</a> </a> -->
                    <a class="btn btn-sm btn-primary btn-round" type="button" href="{{ url('pasien/add') }}"><i class=""></i> Tambah</a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-dark-light">
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Rumah Sakit</th>
                                <th class="font-22 text-center"><i class='bx bx-cog bx-spin'></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pasien as $data) : ?>
                                <tr>
                                    <td>
                                        {{$no++}}
                                    </td>
                                    <td>
                                        {{$data->nama_pasien}}
                                    </td>
                                    <td>
                                        {{$data->alamat}}
                                    </td>
                                    <td>
                                        {{$data->telp}}
                                    </td>
                                    <td>
                                        {{$data->nama_rs}}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('pasien.update', $data->id) }}"><i class="text-warning" data-feather="edit"></i></a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}">
                                            <i class="text-danger" data-feather="trash-2"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>



<?php foreach ($pasien as $data) : ?>
    <div id="delete{{$data->id}}" class="modal fade modalpasien" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary pt-2 pb-2">
                    <h5 class="modal-title mt-0 text-white">Apa Kamu Yakin ?</h5>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-body">
                    <div class="mb-2 mt-1">
                        <div class="text-sm-end d-none d-sm-block">
                            <button href="#" class="btn btn-secondary btn-round" data-bs-dismiss="modal"><i class="mdi mdi-progress-close"></i> Batal</button>
                            <a id="{{$data->id}}" class="btn btn-danger btn-sm hapus_pasien"> <i class="fas fa-trash"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach ?>

@endsection