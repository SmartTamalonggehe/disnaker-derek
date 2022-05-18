@extends('admin.layouts.default')

@section('judul','Distrik')

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

        @if (session('berhasil'))
        <div class="box-body pad res-tb-block">
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>{{session('berhasil')}}
            </div>
        </div>
        @endif

        <div>
            <a href="{{ route('distrik.create')}}" class="btn btn-warning-light"><i class="fa fa-plus"></i> Tambah Data </a>
        </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Distrik</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>Kode Distrik</th>
                            <th>Nama Distrik</th>
                            <th>Opsi</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach ($distrik as $item )
                         <tr>
                            <td align="center">{{$loop->iteration}}</td>
                            <td>{{$item->kd_distrik}}</td>
                            <td>{{$item->nm_distrik}}</td>
                            <td align="center">
                                <a href="{{route('distrik.edit', $item->id)}}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-success mb-5"><i class="fa fa-edit (alias)"></i> Edit</button></a>
                                <form action="{{ route('distrik.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
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
                            <th>Kode Distrik</th>
                            <th>Nama Distrik</th>
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



<form action="" method="post" id="formHapus">
    @csrf
    @method('DELETE')
</form>

@endsection

@section('script')
<script>

   $('.btn-hapus').click(function(e){
    e.preventDefault();
            let href= $(this).attr('href')
        swal({
            title: "Yakin Menghapus Data Ini?",
            text: "Data Akan Terhapus Permanent!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yakin!",
            cancelButtonText: "Batal",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm){
            if (isConfirm) {
                document.getElementById('formHapus').action= href
                document.getElementById('formHapus').submit();
            }
        });
    });
</script>

@endsection
