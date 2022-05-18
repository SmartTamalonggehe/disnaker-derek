@extends('pencaker.layouts.default')

@section('judul','Pencaker')

@section('main')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">- Data Pencaker -</h3>
            </div>
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
    @if (!$pencaker)
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
            <h4 class="box-title">Silahkan Input Data Diri Anda</h4>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('pencaker.store')}}" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>No Penduduk <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="no_penduduk" id="no_penduduk" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Nama  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="nm_pencaker" id="nm_pencaker" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Tempat Lahir <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="tempat" id="tempat" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required data-validation-required-message="Tidak Boleh Kosong"> </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Kelurahan <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="kelurahan_id" id="kelurahan_id" required class="form-select">
                                        <option value="">- Pilih Kelurahan -</option>
                                        @foreach ($kelurahan as $item )
                                        <option value="{{$item->id}}">{{$item->nm_kelurahan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 for="jenkel">Jenis Kelamin <span class="text-danger">*</span></h5>
                                        <fieldset class="controls">
                                            <input name="jenkel" type="radio" id="pria" value="Pria">
                                            <label for="pria">Pria</label>
                                        </fieldset>
                                        <fieldset>
                                            <input name="jenkel" type="radio" id="wanita" value="Wanita">
                                            <label for="wanita">Wanita</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Status Perkawinan <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="status" id="status" required class="form-select">
                                        <option value="">- Pilih Status Perkawinan -</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Agama <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="agama" id="agama" required class="form-select">
                                        <option value="">- Pilih Agama -</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Khatolik">Khatolik</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Alamat <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <textarea name="alamat" id="alamat" class="form-control" required placeholder="Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Foto <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="foto" id="foto" class="form-control" required>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
        <!-- /.Basic Forms -->
    @else
        <div class="col-lg-12 col-12">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                <h4 class="box-title">Data Pencaker</h4>
                </div>
                <!-- /.box-header -->
                <table class="table">
                    <tbody>
                        <tr>
                            <td>No. Penduduk</td>
                            <td>:</td>
                            <td>{{$pencaker->no_penduduk}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$pencaker->nm_pencaker}}</td>
                        </tr>
                        <tr>
                            <td>Tempat, Tgl.Lahir</td>
                            <td>:</td>
                            <td>{{$pencaker->tempat}},
                                {{$pencaker->tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Distrik - Kelurahan</td>
                            <td>:</td>
                            <td>{{$pencaker->kelurahan->distrik->nm_distrik}} -
                                {{$pencaker->kelurahan->nm_kelurahan}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$pencaker->jenkel}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>{{$pencaker->status}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{$pencaker->agama}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$pencaker->alamat}}</td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td>
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a class="image-popup-vertical-fit" href="{{asset('storage/pencaker/' .$pencaker->foto)}}" title="foto Lowongan">
                                        <img src="{{asset('storage/pencaker/' .$pencaker->foto)}}" class="img-fluid" alt=""  />
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('pendidikan.index')}}"> <button type="submit" class="btn btn-success pull-right">Next</button></a>
                    </div>

            </div>
            <!-- /.box -->
        </div>
    @endif
</section>
<!-- /.content -->


@endsection

@section('script')
{{--
<script>
        $(".tab-wizard").steps({
        headerTag: "h6"
        , bodyTag: "section"
        , transitionEffect: "none"
        , titleTemplate: '<span class="step">#index#</span> #title#'
        , labels: {
            finish: "Submit"
        }
        , onFinished: function (event, currentIndex) {
        swal("Your Order Submitted!", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
        }
    });

        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6"
            , bodyTag: "section"
            , transitionEffect: "none"
            , titleTemplate: '<span class="step">#index#</span> #title#'
            , labels: {
                finish: "Submit"
            }
            , onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            }
            , onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            }
            , onFinished: function (event, currentIndex) {
                swal("Yakin dengan data yang anda ini !", "Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.");
            }

        }),    $(".validation-wizard").validate({
            ignore: "input[type=hidden]"
            , errorClass: "text-danger"
            , successClass: "text-success"
            , highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            }
            , unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            }
            , errorPlacement: function (error, element) {
                error.insertAfter(element)
            }
            , rules: {
                email: {
                    email: !0
                }
            }
        })
</script> --}}

@endsection


{{--
<div class="box">
    <div class="box-header with-border">
        <h4 class="box-title">Step wizard with validation</h4>
    </div>

    <div class="box-body wizard-content">
        <form action="{{route('pencaker.store')}}" id="formtambah" method="post" enctype="multipart/form-data" class="validation-wizard wizard-circle">
            @csrf

            <h6>Pencaker</h6>
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <h5>No Penduduk <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="no_penduduk" id="no_penduduk" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                            </div>
                            <div class="form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                            <h5>Nama  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nm_pencaker" id="nm_pencaker" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                            </div>
                            <div class="form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                            <h5>Tempat Lahir <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="tempat" id="tempat" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                            </div>
                            <div class="form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                            <h5>Tanggal Lahir <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required data-validation-required-message="Tidak Boleh Kosong"> </div>
                            <div class="form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Kelurahan <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="kelurahan_id" id="kelurahan_id" required class="form-select">
                            <option value="">- Pilih Kelurahan -</option>
                            @foreach ($kelurahan as $item )
                            <option value="{{$item->id}}">{{$item->nm_kelurahan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="jenkel">Jenis Kelamin <span class="text-danger">*</span></h5>
                            <fieldset class="controls">
                                <input name="jenkel" type="radio" id="pria" value="Pria">
                                <label for="pria">Pria</label>
                            </fieldset>
                            <fieldset>
                                <input name="jenkel" type="radio" id="wanita" value="Wanita">
                                <label for="wanita">Wanita</label>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Status Perkawinan <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="status" id="status" required class="form-select">
                            <option value="">- Pilih Status Perkawinan -</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Agama <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select name="agama" id="agama" required class="form-select">
                            <option value="">- Pilih Agama -</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Alamat <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <textarea name="alamat" id="alamat" class="form-control" required placeholder="Alamat"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Foto <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="file" name="foto" id="foto" class="form-control" required>
                    </div>
                </div>
            </section>


            <h6>Pendidikan</h6>
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <h5>Nama Pencaker <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="pencaker_id" id="pencaker_id" required class="form-select">
                                    <option value="">- Pilih Pencaker -</option>
                                    @foreach ($pencaker as $item )
                                    <option value="{{$item->id}}">{{$item->nm_pencaker}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
            </section>


            <h6>Persyaratan</h6>
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <h5>Nama Pencaker <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="pencaker_id" id="pencaker_id" required class="form-select">
                                    <option value="">- Pilih Pencaker -</option>
                                    @foreach ($pencaker as $item )
                                    <option value="{{$item->id}}">{{$item->nm_pencaker}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                            <h5>Sertifikat<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="sertifikat" id="sertifikat" class="form-control">
                            </div>
                        </div>
            </section>

        </form>
    </div>
</div> --}}
