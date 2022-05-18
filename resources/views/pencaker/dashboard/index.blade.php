@extends('pencaker.layouts.default')

@section('judul','Dashboard')

@section('main')

    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="row">
            <div class="box">
            <div class=" col-12">
                <div class="box">
                    <div class="card-body d-flex p-0">
                        <div class="flex-grow-1 px-70 pt-100 pb-200 flex-grow-1 bg-img " style=" background-image: url(images/dashboard.jpg)">

                            <h1 class="text-white">Dinas Tenaga Kerja</h1>
                            <h1 class="text-white"><b>Kota Jayapura</b></h1>

                            <a href="/login" class="btn btn-warning text-dark mt-5">DAFTAR SEKARANG</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-12">
            <div class="box">
              <div class="box-header with-border">
                <h4 class="box-title">Sambutan Kelapa Dinas</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div id="navpills2-1" class="tab-pane active">
                          <div class="row">
                              <div class="col-md-2"> <img src="../images/avatar/375x200/1.jpg" class="img-fluid" alt=""> </div>
                              <div class="col-md-10">
                                  <p> “Shalom,Salam Sejahtera bagi kita semua. Saya selaku Kepala Dinas Tenaga Kerja mengucapkan selamat
                                    datang dan selamat bergabung dalam “Sistem Informasi Kartu Tanda Pencari Kerja berbasis Web” bagi seluruh pencaker yang
                                    ada di kota jayapura. Sistem informasi ini dibuat guna memudahkan pencaker dalam melakukan pendaftaran Kartu Kuning/Kartu
                                    tanda pencaker (AK/I) dan admin dalam hal ini pegawai/staf Dinas Tenaga Kerja dalam memantau perkembangan pencaker. Besar
                                    harapan saya semoga dengan sistem ini dapat memajukan ekonomi, efisiensi waktu dan penyesuaian diri menghadapa era industri 4.0 ini.
                                    Sekian dari saya, terimakasih. Tuhan Merberkati. Waniambey”
                                </p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>


    </section>
    <!-- /.content -->

@endsection



