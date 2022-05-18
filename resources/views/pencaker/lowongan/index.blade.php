@extends('pencaker.layouts.default')

@section('judul','Lowongan')

@section('main')


<!-- Main content -->
<section class="content">

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">- Loker -</h3>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($lowongan as $item )
        <div class="col-lg-4 col-12">
            <div class="box">
              <div class="box-body">
                    <div id="image-popups">
                        <a class="image-popup-vertical-fit" href="{{asset('storage/loker/poster/' .$item->poster)}}" title="Poster Lowongan">
                            <img src="{{asset('storage/loker/poster/' .$item->poster)}}" class="img-fluid" alt="" />
                        </a>
                    </div>
                    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="fa fa-eye"></i>
                        Detail
                      </button>

              </div>
            </div>
        </div>
        @endforeach
    </div>

</section>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Detail Loker</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($lowongan as $item )
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Perusahaan</td>
                                    <td>:</td>
                                    <td>{{$item->nm_perusahaan}}</td>
                                </tr>
                                <tr>
                                    <td>Lowongan</td>
                                    <td>:</td>
                                    <td>{{$item->nm_loker}}</td>
                                </tr>
                                <tr>
                                    <td>Umur Minimal</td>
                                    <td>:</td>
                                    <td>{{$item->umur_minimal}}</td>
                                </tr>
                                <tr>
                                    <td>Umur Maksimal</td>
                                    <td>:</td>
                                    <td>{{$item->umur_maksimal}}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Terakhir</td>
                                    <td>:</td>
                                    <td>{{$item->pend_terakhir}}</td>
                                </tr>
                                <tr>
                                    <td>Keahlian Dibutuhkan</td>
                                    <td>:</td>
                                    <td>{{$item->kehalian}}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{$item->keterangan}}</td>
                                </tr>
                                <tr>
                                    <td>Poster</td>
                                    <td>:</td>
                                    <td>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a class="image-popup-vertical-fit" href="{{asset('storage/loker/poster/' .$item->poster)}}" title="foto Lowongan">
                                                <img src="{{asset('storage/loker/poster/' .$item->poster)}}" class="img-fluid" alt=""  />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endforeach

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-start" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
