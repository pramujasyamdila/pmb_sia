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


                            @foreach ($kecamatan as $kec)
                                <form action="/kecamatan/update" method="post" role="form" id="quickForm"
                                    style="margin-top: 30px">
                                    <div class="card card-primary card-outline">
                                        {{ csrf_field() }}
                                        <div class="form-group" style="padding: 20px">
                                            <input type="hidden" class="form-control" name="id"
                                                value="{{ $kec->id_kec }}">
                                            <label for="namakecamatan">Nama Anime</label>
                                            <input type="text" class="form-control" id="namakecamatan"
                                                name="namakecamatan" value="{{ $kec->nm_kec }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

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
