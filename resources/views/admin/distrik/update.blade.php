@extends('admin.layouts.default')

@section('judul','Ubah Distrik')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Distrik -</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">


         <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Edit Data Distrik</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('distrik.update', $distrik->id)}}" method="post" novalidate>
                        @csrf
                        @method('PUT')
					  <div class="row">
						<div class="col-12">
							<div class="form-group">
								<h5>Kode Distrik <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="kd_distrik" id="kd_distrik"  value="{{$distrik->kd_distrik}}" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
								</div>
								<div class="form-control-feedback"></div>
							</div>
							<div class="form-group">
								<h5>Nama Distrik <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="nm_distrik" id="nm_distrik" value="{{$distrik->nm_distrik}}" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
								</div>
								<div class="form-control-feedback"></div>
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

      </section>
      <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection

