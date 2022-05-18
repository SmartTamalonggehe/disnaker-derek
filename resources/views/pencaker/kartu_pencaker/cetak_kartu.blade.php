
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <style>

.table{
    width: 100%;
    border-collapse: collapse;
}

.table-2{
    width: 100%;
    border-collapse: collapse;
    padding: 10px 0;
    text-align: center;
}

.table,
.table th,
.table td{
    border: 1px solid #873838;
}

.table th {
    padding: 10px 0;
}

.table td {
    padding: 5px;
    text-align: justify;
}

h6{
    text-align: end;
}

h2 {
    text-align: center;
    border-radius: 5px;
    font-weight: bold;
    min-height: 0;
    letter-spacing: 2px;
}

body {
    background-color: rgb(253, 255, 255);

}
.container {
    margin: 0 auto;
    width: 80%;
}

.row {
    min-height: 240px;
}

img {
    width: 35%;
    right: 15% ;
    border-radius: 10px;
}

.mb {
    margin-bottom: 0.5 rem;
}

.mt{
    margin-top: 0.5 rem;
}


    </style>
</head>
<body>
    <div class="container">
            <table>
                <tr>
                    <td><img src="{{('images/disnaker.png')}}" alt="" ></td>
                    <td>
                        <h2 class="mb mt">PEMERINTAH KOTA JAYAPURA <br>DINAS TENAGA KERJA</h2>

                        <h6>Alamat : Jl. Samratulangi No.25, Mandala, Jayapura Utara, Kota Jayapura, Papua <i class="bi bi-telephone">Telepon.</i> (0967)571446</h6>
                    </td>
                </tr>
            </table>
        </div>

        <header>
            <hr>
            <br>
            <h2>KARTU TANDA PENCARI KERJA</h2>

            <div class="row">
                <table class="table-1">
                    <thead>
						<tr>
							<th></th>
							<th></th>
                            <th></th>
						</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td>No Pencaker</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->kd_kartu }}{{ str_pad($kartu_kuning->no, 4 , '0' , STR_PAD_LEFT )}}</td>
                        </tr>
                        <tr>
                            <td>No Penduduk</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->no_penduduk}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->nm_pencaker}}</td>
                        </tr>
                        <tr>
                            <td>Tempat/ Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->tempat}}/ {{$kartu_kuning->pencaker->tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->jenkel}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->status}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->agama}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->alamat}}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td>{{ $kartu_kuning->pencaker->pendidikan->pend_terakhir}}</td>
                        </tr>

                        </tbody>
                    </table>

            </div>
            {{-- // --}}
            {{-- <div class="row">
                <table class="table-1">
                    <thead>
						<tr>
							<th></th>
							<th></th>
						</tr>
					</thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>kartu ini berlaku untuk melamar pekerjaan.</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Bila ada perubahan data/keterangan lainnya atau telah mendapat pekerjaan, harap segera melapor</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Apabila pencari kerja yang bersangkutan telah diterima bekerja maka instansi/perusahaan yang menerima
                                agar mengembalikan AK/I ini kepada Dinas Tenaga Kerja
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Kartu ini berlaku sampai 2 tahun dengan keharusan melapor tiap 6 bulan sekali terhitung seja pendaftaran</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Apabila dikemudian hari terbukti memberikan keterangan yang tidak benar dan atau memiliki lebih dari satu kartu AK/I
                                maka akan dituntut sesuai dengan peraturan perundang-undangan yang berlaku.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            {{-- ////// --}}
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Laporan</th>
                            <th>Tgl-bln-thn</th>
                            <th>ttd petugas (cantumkan NIP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pertama</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kedua</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ketiga</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diterima Di</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>T.M.T</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <table class="table-2">
                    <thead>
                        <tr>
                            <th></th>
                            <th>KEPALA DINAS TENAGA KERJA <br> KOTA JAYAPURA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>

                        <tr>
                            <td>Tanda Tangan Pencaker</td>
                            <td>DJONI NAA, SE, M.Si</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pembina TK 1</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>NIP. 19680626 199610 1 001</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </header>
    </div>
</body>
</html>
