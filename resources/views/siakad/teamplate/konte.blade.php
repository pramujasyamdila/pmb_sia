<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: #DCDCDC">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SIAKAD</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid" style="margin-top: 10px">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>2021/Ganjil</h3>
                            <p>Tahun Akademik</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">Info Detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>250<sup style="font-size: 20px">%</sup></h3>

                            <p>Tenaga Pendidik</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <a href="#" class="small-box-footer">Info Detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>7.240</h3>

                            <p>Jumlah Mahasiswa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">Info Detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>4.500</h3>

                            <p>Jumlah Alumni</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <a href="#" class="small-box-footer">Info Detail <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

        </div>

        <div class="container-fluid">
            <div class="row" style="margin-top: 5px">
                <div class="col-md-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                            <h5 style="text-align: left"><i class="nav-icon fa fa-bar-chart" aria-hidden="true"></i>Data
                                Statistik
                                Mahasiswa
                            </h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card card-success">

                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="barChart"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Keterangan</strong>
                                    </p>

                                    <div class="progress-group" style="margin-bottom: 30px">
                                        <i class="fa fa-circle" style="color:#1E90FF"></i> &nbsp;Teknik Informatika
                                        <span class="float-right"><b>1300</b>/1400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-blue" style="width: 90%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group" style="margin-bottom: 30px">
                                        <i class="fa fa-circle" style="color:red"></i> &nbsp;Kesehatan
                                        <span class="float-right"><b>1200</b>/1400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group" style="margin-bottom: 30px">
                                        <i class="fa fa-circle" style="color:green"></i>&nbsp;Fakultas Hukum
                                        <span class="float-right"><b>500</b>/1400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group" style="margin-bottom: 30px">
                                        <i class="fa fa-circle" style="color:yellow"></i>&nbsp;Fakultas Management
                                        <span class="float-right"><b>400</b>/1400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>



            {{-- main row 2 --}}
            <div class="row">


            </div>

        </div><!-- /.container-fluid -->

    </section>


    <!-- /.card -->

    <section class="content">
        <div class="container-fluid" style="margin-top: 10px">
            <div class="row-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>


                    </div>
                    <h1 class="card-title">
                        <h1 style="text-align: center"> <i class="fas fa-edit"></i>
                            SECTION INFORMASI AKADEMIK
                        </h1>
                    </h1>
                    <div class="card-body">

                        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill"
                                    href="#custom-content-below-home" role="tab"
                                    aria-controls="custom-content-below-home" aria-selected="true">Info Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill"
                                    href="#custom-content-below-profile" role="tab"
                                    aria-controls="custom-content-below-profile" aria-selected="false">Info Ujian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill"
                                    href="#custom-content-below-messages" role="tab"
                                    aria-controls="custom-content-below-messages" aria-selected="false">Info PMB
                                    Online</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill"
                                    href="#custom-content-below-settings" role="tab"
                                    aria-controls="custom-content-below-settings" aria-selected="false">Info
                                    Registrasi</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="custom-content-below-tabContent">
                            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel"
                                aria-labelledby="custom-content-below-home-tab">
                                <h4> Batas Akhir Pelunans Uang Kuliah Modul 1 (Tagihan Registrasi,SKS2,SKS3) Untuk Kelas
                                    Reguler CK dan C Tanggal 05 Oktober 2020</h4>
                            </div>
                            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel"
                                aria-labelledby="custom-content-below-profile-tab">
                                <h4> Ujian DiAdakan Pada Tanggal 18 Bulan maret Dengan Persratan 1. sudah membayar Uang
                                    tagihan Semester</h4>
                            </div>
                            <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel"
                                aria-labelledby="custom-content-below-messages-tab">
                                <h4> <b> JALUR BEASISWA UNDANGAN PRESTASI, MINAT & BAKAT 2021/2022</b>
                                    <p>
                                        Beasiswa Jalur Undangan Prestasi, Minat & Bakat ini dapat diikuti semua siswa
                                        SMA
                                        yang
                                        akan lulus pada tahun 2021. Beasiswa ini tanpa Ujian Saringan Masuk dan Bebas
                                        Uang
                                        Pendaftaran. Siswa yang mendaftar melalui Jalur Undangan dapat mengajukan
                                        beasiswa
                                    </p>
                            </div>
                            <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel"
                                aria-labelledby="custom-content-below-settings-tab">
                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque
                                tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum
                                consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra.
                                Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut
                                nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                                accumsan ex sit amet facilisis.
                            </div>
                        </div>
                        <div class="tab-custom-content">
                            <p class="lead mb-0">Custome Image</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
</div>




<!-- /.content -->
</div>
