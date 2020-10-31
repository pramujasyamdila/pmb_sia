@include('siakad.teamplate.header');

@include('siakad.teamplate.sidebar');


@include('siakad.teamplate.navbar');
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

                            <form action="/siakad/proses" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama">Nama Anime</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukan Nama..." value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis Anime</label>
                                    <input type="text" class="form-control" name="jenis" id="jenis"
                                        placeholder="Masukan Jabatan..." value="{{ old('jenis') }}">
                                </div>
                                <div class="form-group">
                                    <select name="kartun" class="form-control" id="kartun">
                                        <option value="{{ old('kartun') }}">-- Select State --</option>
                                        @foreach ($kartun as $state)
                                            <option value="{{ $state->id_kartun }}">{{ ucfirst($state->kartun_nama) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
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




@include('siakad.teamplate.footer');
