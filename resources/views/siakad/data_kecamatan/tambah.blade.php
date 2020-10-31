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

                            <form action="/kecamatan/proses" role="form" id="quickForm" method="post"
                                style="margin-top: 30px">
                                <div class="card card-primary card-outline">
                                    {{ csrf_field() }}
                                    <div class=" form-group" style="padding: 20px">
                                        <label for="namakecamatan">Nama Kecamatan</label>
                                        <input type="text" class="form-control" id="nama" name="namakecamatan"
                                            value="{{ old('namakecamatan') }}">

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
