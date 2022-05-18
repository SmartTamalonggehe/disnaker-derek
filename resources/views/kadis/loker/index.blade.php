@extends('kadis.layouts.default')

@section('judul','Loker')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Loker -</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Lowongan Pekerjaan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>Nama Perusaaan</th>
                            <th>Keahlian Dibutuhkan</th>
                            <th>Umur Minimal</th>
                            <th>Umur Maksimal</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Poster</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach ($lowongan as $item )
                         <tr>
                            <td align="center">{{$loop->iteration}}</td>
                            <td>{{$item->nm_perusahaan}}</td>
                            <td>{{$item->kehalian}}</td>
                            <td>{{$item->umur_minimal}}</td>
                            <td>{{$item->umur_maksimal}}</td>
                            <td>{{$item->pend_terakhir}}</td>
                            <td align="center">
                                <a class="image-popup-vertical-fit" href="{{asset('storage/loker/poster/' .$item->poster)}}" title="poster Perusahaan">
                                    <img src="{{asset('storage/loker/poster/' .$item->poster)}}" class="img-fluid" alt="" style="width: 70px" />
                                </a>
                            </td>
                        </tr>
                         @endforeach

                      </tbody>
                      <tfoot align="center">
                          <tr>
                            <th>No</th>
                            <th>Nama Perusaaan</th>
                            <th>Keahlian Dibutuhkan</th>
                            <th>Umur Minimal</th>
                            <th>Umur Maksimal</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Poster</th>
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

