@extends('admin.layouts.default')

@section('judul','Ubah Pelatihan')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">Loker</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">


         <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Edit Data Loker</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('loker.update', $lowongan->id)}}" enctype="multipart/form-data" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Nama Perusahaan <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="nm_perusahaan" id="nm_perusahaan" value="{{$lowongan->nm_perusahaan}}" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Umur Minimal<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="umur_minimal" id="umur_minimal" value="{{$lowongan->umur_minimal}}" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Umur Maksimal<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="umur_maksimal" id="umur_maksimal" value="{{$lowongan->umur_maksimal}}" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Pendidikan Terakhir<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="pend_terakhir" id="pend_terakhir" value="{{$lowongan->pend_terakhir}}" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Keahlian Dibutuhkan<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="kehalian" id="kehalian" value="{{$lowongan->kehalian}}" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Keterangan <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="keterangan" id="keterangan" value="{{$lowongan->keterangan}}" class="form-control" required placeholder="Keterangan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5> Poster Loker<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="poster" id="poster" value="{{$poster->poster}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Simpan</button>
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

      </section>
      <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection

