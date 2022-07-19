@extends('pencaker.layouts.default')

@section('judul', 'Pelatihan')

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
            @foreach ($pelatihan as $item)
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div id="image-popups">
                                <a class="image-popup-vertical-fit"
                                    href="{{ asset('storage/pelatihan/' . $item->poster) }}" title="Poster Lowongan">
                                    <img src="{{ asset('storage/pelatihan/' . $item->poster) }}" class="img-fluid"
                                        alt="" />
                                </a>
                            </div>

                            <button type="button" class="btn btn-success mt-3 card-show" data-bs-toggle="modal"
                                data-bs-target=".bs-example-modal-lg " data-id="{{ $item->id }}"><i
                                    class="fa fa-eye"></i>
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div id="card-pelatihan">

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
@section('script')
    <script src="{{ mix('js/components.js') }}"></script>
@endsection
