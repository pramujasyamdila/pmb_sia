<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalonMahasiswaController extends Controller
{
    public function index(){
        $calonmahasiswa=DB::table('tbl_calon_mahasiswa')
        ->join('tbl_data_kecamatan','tbl_calon_mahasiswa.id_kec','=','tbl_data_kecamatan.id_kec')->get();
        return view('siakad.calon_mahasiswa.index',['calonmahasiswa'=>$calonmahasiswa]);
    }

    public function tambah(){
        $calonmahasiswa=DB::table('tbl_data_kecamatan')->get();
        return view('siakad.calon_mahasiswa.tambah',['siswa'=>$calonmahasiswa]);

    }

    public function proses(Request $request)
    {
        // validasinya
        $messages = [
            'required' => ':attribute Wajib Di Isi',
        ];

        $this->validate($request,[
            'nik' => 'required',
            'calon_mahasiswa' => 'required',
            'nama_kecamatan' => 'required',
            'usercreate' => 'required',
            'tgl_user_create' => 'required',
        ],$messages);

        //end validasi

        // insert data

        DB::table('tbl_calon_mahasiswa')->insert([
            'nik'=>$request->nik,
            'nm_clnmhs'=>$request->calon_mahasiswa,
            'id_kec'=>$request->nama_kecamatan,
            'user_create'=>$request->usercreate,
            'tgl_usercreate'=>$request->tgl_user_create,
        ]);

        // endinsert data


        return redirect('/mahasiswa/index');
    }

    public function edit($id){
        $ambil=DB::table('anime')->where('id_anime',$id)->get();

            return view('CalonMahasiswa.calon_mahsiswa.edit',['anim'=>$ambil]);
    }

    public function update(Request $request){
        DB::table('anime')->where(['id_anime'=>$request->id])->update([
            'anime_nama'=>$request->nama,
            'anime_jenis'=>$request->jenis,
            'id_kartun'=>$request->kartun
        ]);
        return redirect('/mahasiswa/index');

    }
    public function hapus($id){
        DB::table('tbl_calon_mahasiswa')->where('nims',$id)->delete();
        return redirect('/mahasiswa/index');
    }
}
