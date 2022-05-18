@extends('kadis.layouts.default')

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
              <div class="box-header with-border">
                <h3 class="box-title">Data Pencari Kerja</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Name</th>
                                <th>No Penduduk</th>
                                <th>Jenis Kelamin</th>
                                <th>Kelurahan</th>
                                <th>Status</th>
                                <th>Agama</th>
                                <th>Pendidikan</th>
                            </tr>

                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pencaker as $item )
                        <tr>
                            <td align="center">{{$loop->iteration}}</td>
                            <td>
                                <a class="image-popup-vertical-fit" href="{{asset('storage/pencaker/' .$item->foto)}}" title="foto Lowongan">
                                    <img src="{{asset('storage/pencaker/' .$item->foto)}}" class="img-fluid" alt="" style="width: 70px" />
                                </a>
                            </td>
                            <td>{{$item->nm_pencaker}}</td>
                            <td>{{$item->no_penduduk}}</td>
                            <td>{{$item->jenkel}}</td>
                            <td>{{$item->kelurahan->nm_kelurahan}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->agama}}</td>
                            <td>{{$item->pendidikan->pend_terakhir}}</td>


                        </tr>
                        @endforeach

                      </tbody>
                      <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Name</th>
                            <th>No Penduduk</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelurahan</th>
                            <th>Status</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                        </tr>
                      </tfoot>
                    </table>
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

