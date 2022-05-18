@extends('admin.layouts.default')

@section('judul','Pencaker')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Pencaker -</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
           <div class="box">
               <div class="card">
                <div class="with-border">
                    <h3 class="text-center">Data Pencari Kerja</h3>
                </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>No Penduduk</td>
                                        <td>:</td>
                                        <td>{{$pencaker->no_penduduk}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pencaker</td>
                                        <td>:</td>
                                        <td>{{$pencaker->nm_pencaker}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>:</td>
                                        <td>{{$pencaker->tempat}}</td>
                                    </tr>

                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{$pencaker->jenkel}}</td>
                                    </tr>
                                    <tr>
                                        <td>Distrik</td>
                                        <td>:</td>
                                        <td>{{$pencaker->kelurahan->distrik->nm_distrik}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kelurahan</td>
                                        <td>:</td>
                                        <td>{{$pencaker->kelurahan->nm_kelurahan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Perkawinan</td>
                                        <td>:</td>
                                        <td>{{$pencaker->status}}</td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td>:</td>
                                        <td>{{$pencaker->agama}}</td>
                                    </tr>
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
                                    <tr>
                                        <td>Foto</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-lg-3 col-md-4 col-xs-6">
                                                <a class="image-popup-vertical-fit" href="{{asset('storage/pencaker/' .$pencaker->foto)}}" title="foto Lowongan">
                                                    <img src="{{asset('storage/pencaker/' .$pencaker->foto)}}" class="img-fluid" alt="" style="width: 500px"/>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-lg-3 col-md-4 col-xs-6">
                                                <a class="image-popup-vertical-fit" href="{{asset('storage/persyaratan/ktp/' .$persyaratan->ktp)}}" title="Ktp Lowongan">
                                                    <img src="{{asset('storage/persyaratan/ktp/' .$persyaratan->ktp)}}" class="img-fluid" alt=""  />
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ijazah Terakhir</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-lg-3 col-md-4 col-xs-6">
                                                <a class="image-popup-vertical-fit" href="{{asset('storage/persyaratan/ijazah/' .$persyaratan->ijasah)}}" title="ijasah Lowongan">
                                                    <img src="{{asset('storage/persyaratan/ijazah/' .$persyaratan->ijasah)}}" class="img-fluid" alt="" />
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sertifikar</td>
                                        <td>:</td>
                                        <td>
                                            <div class="col-lg-3 col-md-4 col-xs-6">
                                                <a class="image-popup-vertical-fit" href="{{asset('storage/persyaratan/sertifikat/' .$persyaratan->sertifikat)}}" title="Sertifikat Lowongan">
                                                    <img src="{{asset('storage/persyaratan/sertifikat/' .$persyaratan->sertifikat)}}" class="img-fluid" alt="" />
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @if (!$pencaker->kartukuning)
                            <div class="box-footer">
                                <form action="{{ route('pencakerAdmin.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="pencaker_id" value="{{ $pencaker->id }}">
                                    <button type="submit" class="btn btn-primary-light mt-3"><i class="fa fa-vcard-o (alias)"> Buat Kartu Pencaker</i> </button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->

  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection

