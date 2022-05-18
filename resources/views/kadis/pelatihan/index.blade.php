@extends('kadis.layouts.default')

@section('judul','Pelatihan')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title"> - Pelatihan -</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="mt-5">
        </div>
        <div class="row">
          <div class="col-12">
           <div class="box ml-6 mt-5">
              <div class="box-header with-border">
                <h3 class="box-title">Data Pelatihan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                            <th>Penyelengara</th>
                            <th>Poster</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach ($pelatihan as $item )
                         <tr>
                            <td align="center">{{$loop->iteration}}</td>
                            <td>{{$item->nm_pelatihan}}</td>
                            <td>{{$item->jenis_pelatihan}}</td>
                            <td>{{$item->penyelengara}}</td>
                            <td align="center">
                                <a class="image-popup-vertical-fit" href="{{asset('storage/pelatihan/' .$item->poster)}}" title="Poster Pelatihan">
                                    <img src="{{asset('storage/pelatihan/' .$item->poster)}}" class="img-fluid" alt="" style="width: 70px" />
                                </a>
                            </td>
                        </tr>
                         @endforeach

                      </tbody>
                      <tfoot align="center">
                          <tr>
                            <th>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                            <th>Penyelengara</th>
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

