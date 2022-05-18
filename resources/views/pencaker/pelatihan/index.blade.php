@extends('pencaker.layouts.default')

@section('judul','Pelatihan')

@section('main')

<!-- Main content -->
<section class="content">

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">- Pelatihan -</h3>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($pelatihan as $item )
        <div class="col-lg-4 col-12">
            <div class="box">
              <div class="box-body">
                    <div id="image-popups">
                        <a class="image-popup-vertical-fit" href="{{asset('storage/pelatihan/' .$item->poster)}}" title="Poster Lowongan">
                            <img src="{{asset('storage/pelatihan/' .$item->poster)}}" class="img-fluid" alt="" />
                        </a>
                    </div>

                <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg "><i class="fa fa-eye"></i>
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
                <h4 class="modal-title" id="myLargeModalLabel">Detail Pelatihan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($pelatihan as $item )
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Pelatihan</td>
                                <td>:</td>
                                <td>{{$item->nm_pelatihan}}</td>
                            </tr>
                            <tr>
                                <td>Jenis Pelatihan</td>
                                <td>:</td>
                                <td>{{$item->jenis_pelatihan}}</td>
                            </tr>
                            <tr>
                                <td>Penyelengara</td>
                                <td>:</td>
                                <td>{{$item->penyelengara}}</td>
                            </tr>
                            <tr>
                                <td>Poster</td>
                                <td>:</td>
                                <td>
                                    <div class="col-lg-3 col-md-4 col-xs-6">
                                        <a class="image-popup-vertical-fit" href="{{asset('storage/pelatihan/' .$item->poster)}}" title="foto Lowongan">
                                            <img src="{{asset('storage/pelatihan/' .$item->poster)}}" class="img-fluid" alt=""  />
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
