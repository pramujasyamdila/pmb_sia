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

                            @foreach ($anim as $p)
                                <form action="/siakad/update" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id" value="{{ $p->id_anime }}">
                                        <label for="nama">Nama Anime</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ $p->anime_nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis Anime</label>
                                        <input type="text" class="form-control" name="jenis" id="jenis"
                                            value="{{ $p->anime_jenis }}">
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" id="kartun" name="kartun">
                                            @foreach ($anim as $type)
                                                <option
                                                    {{ $type->kartun_nama == $anim->kartun_nama ? 'selected' : '' }}>
                                                    {{ $type->kartun_nama }}
                                                </option>
                                            @endforeach
                                        </select>
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




@include('siakad.teamplate.footer');
