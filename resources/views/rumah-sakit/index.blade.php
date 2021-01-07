@extends('master')
@section('konten')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Rumah Sakit</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Data</a></li>
                            <li class="active">Rumah Sakit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Rumah Sakit</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Kode Pos</th>
                                    <th>Telepon</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar_rumah_sakit as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_rs }}</td>
                                    <td>{{ $item->jenis_rsu }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->kota }}</td>
                                    <td>{{ $item->kode_pos }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td>{{ $item->latitude }}</td>
                                    <td>{{ $item->longitude }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info">
                                          <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="#" method="post" class="d-inline">
                                          @csrf
                                          @method('delete')
                                          <button class="btn btn-danger">
                                              <i class="fa fa-trash"></i>
                                          </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection