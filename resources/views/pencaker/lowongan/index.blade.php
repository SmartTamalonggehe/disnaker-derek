@extends('pencaker.layouts.default')

@section('judul', 'Lowongan')

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
            @foreach ($lowongan as $item)
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div id="image-popups">
                                <a class="image-popup-vertical-fit"
                                    href="{{ asset('storage/loker/poster/' . $item->poster) }}" title="Poster Lowongan">
                                    <img src="{{ asset('storage/loker/poster/' . $item->poster) }}" class="img-fluid"
                                        alt="" />
                                </a>
                            </div>
                            <button type="button" class="btn btn-success mt-3 card-show" data-bs-toggle="modal"
                                data-bs-target=".modal-lowongan" data-id="{{ $item->id }}"><i class="fa fa-eye"></i>
                                Detail
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <div class="modal fade modal-lowongan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div id="card-lowongan">

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
@section('script')
    <script src="{{ mix('js/components.js') }}"></script>
@endsection
