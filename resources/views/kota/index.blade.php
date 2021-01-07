@extends('master')
@section('konten')
{{-- <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Provinsi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Data</a></li>
                            <li class="active">Provinsi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Kota</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kota</th>
                                    <th>Nama Provinsi</th>
                                    <th>Jenis</th>
                                    <th>Kode Pos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar_kota as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_kota }}</td>
                                    <td>{{ $item->nama_provinsi }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->kode_pos }}</td>
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