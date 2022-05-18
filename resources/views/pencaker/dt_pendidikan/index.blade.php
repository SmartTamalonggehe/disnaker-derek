@extends('pencaker.layouts.default')

@section('judul','Pendidikan')

@section('main')



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">-Data Pendidikan -</h3>
        </div>

    </div>
</div>


@if (session('berhasil'))
<div class="box-body pad res-tb-block">
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{session('berhasil')}}
    </div>
</div>
@endif

<!-- Main content -->
<section class="content">
    @if (!$pendidikan)
         <!-- Basic Forms -->
         <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Silahkan Input Data Pendidikan Anda</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                <div class="col">
                    <form action="{{ route('pendidikan.store')}}" enctype="multipart/form-data" method="post" novalidate>
                        @csrf
                        <div class="row">
                        <div class="col-12">

                            <div class="form-group">
                                <h5>Pendidikan Terakhir<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="pend_terakhir" id="pend_terakhir" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                                </div>
                                <div class="form-control-feedback"></div>
                            </div>
                            <div class="form-group">
                                <h5>Nama Instansi<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="nm_instansi" id="nm_instansi" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                                </div>
                                <div class="form-control-feedback"></div>
                            </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    @else
        <div class="col-lg-12 col-12">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">Data Pendidikan</h4>
                </div>
                <!-- /.box-header -->
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td>{{$pendidikan->pend_terakhir}}</td>
                        </tr>
                        <tr>
                            <td>Nama Instansi</td>
                            <td>:</td>
                            <td>{{$pendidikan->nm_instansi}}</td>
                        </tr>

                    </tbody>
                </table>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('pencaker.index')}}"><button type="submit" class="btn btn-warning"> Previous</button></a>
                        <a href="{{route('persyaratan.index')}}"><button type="submit" class="btn btn-success pull-right">Next</button></a>
                    </div>

            </div>
            <!-- /.box -->
        </div>
    @endif

</section>
<!-- /.content -->

@endsection
