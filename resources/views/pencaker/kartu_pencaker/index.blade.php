@extends('pencaker.layouts.default')

@section('judul', 'Kartu Pencaker')

@section('main')



    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">- Data Kartu Pencaker -</h3>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Silahkan Cetak Kartu Pencaker Anda</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if ($kartu_kuning)
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>No. Penduduk</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->no_penduduk }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->nm_pencaker }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tgl.Lahir</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->tempat }},
                                        {{ $kartu_kuning->pencaker->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Distrik - Kelurahan</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->kelurahan->distrik->nm_distrik }} -
                                        {{ $kartu_kuning->pencaker->kelurahan->nm_kelurahan }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->jenkel }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->status }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->agama }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $kartu_kuning->pencaker->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a class="image-popup-vertical-fit"
                                                href="{{ asset('storage/pencaker/' . $kartu_kuning->pencaker->foto) }}"
                                                title="foto Lowongan">
                                                <img src="{{ asset('storage/pencaker/' . $kartu_kuning->pencaker->foto) }}"
                                                    class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif

                <!-- /.row -->
                <a href="{{ route('CetakKartu') }}">
                    <div class="btn btn-warning mt-3">
                        <i class="fa  fa-print"> Cetak Kartu Pencaker</i>
                    </div>
                </a>
            </div>
            <!-- /.box-body -->

        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
