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

                            {{-- menampilkan error validasi
                            --}}

                            @if (count($errors) > 0)
                                <div class="alert alert-danger" class="gaya" style="color:white">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li><span>{{ $error }}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="/mahasiswa/proses" method="post" role="form" id="quickForm"
                                style="margin-top: 30px">
                                <div class="card card-primary card-outline">
                                    {{ csrf_field() }}
                                    <div class="form-group" style="padding: 20px">
                                        <label for="nik">Nik</label>
                                        <input type="text" class="form-control" id="nik" name="nik"
                                            value="{{ old('nik') }}">

                                        <label for="calon_mahasiswa">Nama Calon Mahasiswa</label>
                                        <input type="text" class="form-control" id="calon_mahasiswa"
                                            name="calon_mahasiswa" value="{{ old('calon_mahasiswa') }}">


                                        <label for="calon_mahasiswa">Nama Kecamatan</label>
                                        <select name="nama_kecamatan" class="form-control" id="nama_kecamatan">
                                            <option value="{{ old('nama_kecamatan') }}">-- Pilih Kecamatan --</option>
                                            @foreach ($siswa as $cln)
                                                <option value="{{ $cln->id_kec }}">{{ ucfirst($cln->nm_kec) }}
                                                </option>
                                            @endforeach
                                        </select>


                                        <label for="usercreate">User Create</label>
                                        <input type="text" class="form-control" id="usercreate" name="usercreate"
                                            value="{{ old('usercreate') }}">


                                        <label for="tgl_user_create">Tanggal Usercreate</label>
                                        <input type="date" class="form-control" id="tgl_user_create"
                                            name="tgl_user_create" value="{{ old('tgl_user_create') }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

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
