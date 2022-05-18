@extends('admin.layouts.default')

@section('judul','Pencaker')

@section('main')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">- Pencaker Terdaftar -</h3>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body p-15">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Penduduk</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Kartu Kuning</th>
                                    <th>Opsi</th>

                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($pencaker as $item )
                              <tr>
                                  <td align="center">{{$loop->iteration}}</td>
                                  <td>{{$item->nm_pencaker}}</td>
                                  <td>{{$item->no_penduduk}}</td>
                                  <td>{{$item->jenkel}}</td>
                                  <td>{{$item->pendidikan->pend_terakhir}}</td>
                                  <td align="center">
                                      @if ($item->kartukuning)
                                            <span class="badge badge-success">Sudah Ada</span>
                                      @else
                                          <span class="badge badge-warning">Belum Ada</span>
                                      @endif
                                  </td>
                                  <td align ="center">
                                    <a href="{{route('pencakerAdmin.show', $item->id)}}" class="waves-effect waves-light btn btn-outline btn-primary mb-5"><i class="fa fa-eye"> Detail</i> </a>
                                        <form action="{{ route('pencakerAdmin.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
                                        @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                            class="waves-effect waves-light btn btn-outline btn-danger mb-5" onclick="return confirm('Anda Yakin Menghapus Data Ini? ')"><i class="fa fa-trash"> Hapus</i> </button>
                                        </form>
                                  </td>

                              </tr>
                              @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>No Penduduk</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Kartu Kuning</th>
                                    <th >Opsi</th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- /.content -->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection


