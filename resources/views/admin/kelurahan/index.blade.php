@extends('admin.layouts.default')

@section('judul','Kelurahan')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Kelurahan -</h3>
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

        <div>
            <a href="{{ route('kelurahan.create')}}" class="btn btn-warning-light"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Kelurahan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>Nama Distrik</th>
                            <th>Nama Kelurahan</th>
                            <th>Opsi</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach ($kelurahan as $item )
                         <tr>
                            <td align="center">{{$loop->iteration}}</td>
                            <td>{{$item->distrik->nm_distrik}}</td>
                            <td>{{$item->nm_kelurahan}}</td>
                            <td align="center">
                                <a href="{{ route('kelurahan.edit', $item->id) }}" class="waves-effect waves-light btn btn-outline btn-success mb-5"><i class="fa fa-edit (alias)"></i> Edit</a>
                                <form action="{{ route('kelurahan.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="waves-effect waves-light btn btn-outline btn-danger mb-5" onclick="return confirm('Anda Yakin Menghapus Data Ini? ')"><i class="fa fa-trash-o"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                         @endforeach

                      </tbody>
                      <tfoot align="center">
                          <tr>
                            <th>No</th>
                            <th>Nama Distrik</th>
                            <th>Nama Kelurahan</th>
                            <th>Opsi</th>
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

