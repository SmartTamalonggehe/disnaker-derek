@extends('admin.layouts.default')

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

      @if (session('berhasil'))
      <div class="box-body pad res-tb-block">
          <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{session('berhasil')}}
          </div>
      </div>
      @endif

      <div>
           <a href="{{ route('loker.create')}}" class="btn btn-warning-light">Tambah Data</a>
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
                            <th>Pedidikan Terakhir</th>
                            <th>Keterangan</th>
                            <th>Poster</th>
                            <th>Opsi</th>
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
                            <td>{{$item->keterangan}}</td>
                            <td align="center">
                                <a class="image-popup-vertical-fit" href="{{asset('storage/loker/poster/' .$item->poster)}}" title="Poster Perusahaan">
                                    <img src="{{asset('storage/loker/poster/' .$item->poster)}}" class="img-fluid" alt="" style="width: 70px" />
                                </a>
                            </td>

                            <td align="center">
                                {{-- <a href="{{ route('loker.edit', $item->id) }}" class="btn btn-success">Edit</a> --}}
                                <form action="{{ route('loker.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="waves-effect waves-light btn btn-outline btn-danger mb-5" onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
                                </form>
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
                            <th>Pedidikan Terakhir</th>
                            <th>Keterangan</th>
                            <th>Poster</th>
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

