@include('siakad.teamplate.header')

@include('siakad.teamplate.sidebar')


@include('siakad.teamplate.navbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">{{-- main fluid
            container--}}

            {{-- main row1 --}}
            <div class="row">
                <div class="container-fluid">
                    <div class="row mb-10">
                        <div class="col-sm-6">

                            @foreach ($calonmahasiswa as $cln)
                                <form action="/CalonMahasiswa/update" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{ $cln->nims }}">
                                        <label for="nik">Nik</label>
                                        <input type="text" class="form-control" id="nik" name="nik"
                                            value="{{ $cln->nik }}">
                                    </div>
                                    <div class="form-group">

                                        <label for="calonmahasiswa">Nama Calon Mahasiswa</label>
                                        <input type="text" class="form-control" id="calonmahasiswa"
                                            name="calonmahasiswa" value="{{ $cln->nm_kec }}">
                                    </div>
                                    <div class="form-group">
                                        <select name="nama_kecamatan" class="form-control" id="nama_kecamatan">
                                            <option value="{{ old('nama_kecamatan') }}">-- Pilih Kecamatan --</option>
                                            @foreach ($calon_mahasiswa as $state)
                                                <option value="{{ $state->id_kec }}">{{ ucfirst($state->nm_kec) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <label for="usercreate">User Create</label>
                                        <input type="text" class="form-control" id="usercreate" name="usercreate"
                                            value="{{ $kec->user_create }}">
                                    </div>
                                    <div class="form-group">

                                        <label for="tgl_user_create">Tanggal Create</label>
                                        <input type="text" class="form-control" id="tgl_user_create"
                                            name="tgl_user_create" value="{{ $cln->stgl_usercreate }}">
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>



            {{-- main row 2 --}}

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




@include('siakad.teamplate.footer')
