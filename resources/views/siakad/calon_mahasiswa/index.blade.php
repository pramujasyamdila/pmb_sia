@include('siakad.teamplate.header')

@include('siakad.teamplate.sidebar')

@include('siakad.teamplate.navbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">{{-- main fluid
            container--}}
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <a class="btn btn-primary" href="/mahasiswa/tambah" role="button">Tambah Calon
                                Mahasiswa </a>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            {{-- main row1 --}}
            <div class="row">
                <div class="container-fluid">
                    <h1 style="text-align: center"><i class="nav-icon fas fa-edit"></i>Data Calon Mahasiswa</h1>
                    <div class="row md-12">

                        <div class="col-md-12">
                            <div class="card-body" style="background: #D3D3D3" style="margin-bottom: 100px">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="text-align: center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama Calon Mahasiswa</th>
                                            <th>Nama Kecamatan</th>
                                            <th>UserCreate</th>
                                            <th>Tanggal Usercreate</th>
                                            <th>Event</th>
                                        </tr>
                                    </thead>
                                    @foreach ($calonmahasiswa as $cln)

                                        <tbody style="text-align: center">
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $cln->nik }}</td>
                                                <td>{{ $cln->nm_clnmhs }}</td>
                                                <td>{{ $cln->nm_kec }}</td>
                                                <td>{{ $cln->user_create }}</td>
                                                <td>{{ $cln->tgl_usercreate }}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="/mahasiswa/edit/{{ $cln->nims }}"
                                                        role="button">Edit</a>
                                                    <a class="btn btn-danger" href="/mahasiswa/hapus/{{ $cln->nims }}"
                                                        role="button">Hapus</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>





        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




@include('siakad.teamplate.footer')
