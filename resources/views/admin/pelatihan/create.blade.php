@extends('admin.layouts.default')

@section('judul','Tambah Pelatihan')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Pelatihan -</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">

         <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Tambah Data Pelatihan</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('pelatihan.store')}}" enctype="multipart/form-data" method="post" novalidate>
                        @csrf
					  <div class="row">
						<div class="col-12">
							<div class="form-group">
								<h5>Nama Pelatihan <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="nm_pelatihan" id="nm_pelatihan" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
								</div>
								<div class="form-control-feedback">

                            </div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<h5>Jenis Pelatihan <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="jenis_pelatihan" id="jenis_pelatihan" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
								</div>
								<div class="form-control-feedback"></div>
                            </div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<h5>Penyelenggara Pelatihan<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="penyelengara" id="penyelengara" class="form-control" required data-validation-required-message=" Tidak Boleh Kosong">
								</div>
								<div class="form-control-feedback"></div>
                            </div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<h5>Input Poster <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file" name="poster" id="poster" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
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

