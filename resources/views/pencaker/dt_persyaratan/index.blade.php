@extends('pencaker.layouts.default')

@section('judul','Persyaratan')

@section('main')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">- Data Persyaratan -</h3>
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
    @if (!$persyaratan)
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Silahkan Input Data Persyaratan Anda</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                <div class="col">
                    <form action="{{ route('persyaratan.store')}}" enctype="multipart/form-data" method="post" novalidate>
                        @csrf
                        <div class="row">
                        <div class="col-12">

                            <div class="form-group">
                                <h5>KTP <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="ktp" id="ktp" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Ijasah Terakhir <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="ijasah" id="ijasah" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Sertifikat<span class="text-danger"></span></h5>
                                <div class="controls">
                                    <input type="file" name="sertifikat" id="sertifikat" class="form-control">
                                </div>
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
                <h4 class="box-title">Data Bersyaratan</h4>
                </div>
                <!-- /.box-header -->
                <table class="table">
                    <tbody>
                        <tr>
                            <td>KTP</td>
                            <td>:</td>
                            <td>
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="image-popup-vertical-fit" href="{{asset('storage/persyaratan/ktp/' .$persyaratan->ktp)}}" title="ktp ">
                                        <img src="{{asset('storage/persyaratan/ktp/' .$persyaratan->ktp)}}" class="img-fluid" alt=""  />
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ijazah</td>
                            <td>:</td>
                            <td>
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="image-popup-vertical-fit" href="{{asset('storage/persyaratan/ijazah/' .$persyaratan->ijasah)}}" title="ijasah ">
                                        <img src="{{asset('storage/persyaratan/ijazah/' .$persyaratan->ijasah)}}" class="img-fluid" alt=""  />
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sertifikat</td>
                            <td>:</td>
                            <td>
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="image-popup-vertical-fit" href="{{asset('storage/persyaratan/sertifikat/' .$persyaratan->sertifikat)}}" title="sertifikat ">
                                        <img src="{{asset('storage/persyaratan/sertifikat/' .$persyaratan->sertifikat)}}" class="img-fluid" alt="" />
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('pendidikan.index')}}"><button type="submit" class="btn btn-warning"> Previous</button></a>
                        <button type="submit" class="btn btn-success pull-right"> Selesai</button>
                    </div>

            </div>
            <!-- /.box -->
        </div>
    @endif

</section>
<!-- /.content -->

@endsection
