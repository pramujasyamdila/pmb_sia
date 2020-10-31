@include('siakad.teamplate.header');

@include('siakad.teamplate.sidebar');


@include('siakad.teamplate.navbar');

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
                            <a class="btn btn-primary" href="/siakad/tambah" role="button">Tambah</a>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            {{-- main row1 --}}
            <div class="row">
                <div class="container-fluid">
                    <div class="row mb-6">
                        <div class="col-sm-12">

                            <table class="table">
                                <thead class="thead-light" style="text-align: center">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama_anime</th>
                                        <th scope="col">jenis_anime</th>
                                        <th scope="col">namak</th>
                                        <th scope="col">Event</th>
                                    </tr>
                                </thead>
                                @foreach ($pegawai as $no => $p)
                                    <tbody style="text-align: center">
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $p->anime_nama }}</td>
                                            <td>{{ $p->anime_jenis }}</td>
                                            <td>{{ $p->kartun_nama }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="/siakad/edit/{{ $p->id_anime }}"
                                                    role="button">Edit</a>
                                                <a class="btn btn-danger" href="/siakad/hapus/{{ $p->id_anime }}"
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





        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




@include('siakad.teamplate.footer');
