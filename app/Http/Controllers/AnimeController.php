<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimeController extends Controller
{
    public function index(){
        $pegawai=DB::table('anime')
        ->join('kartun','anime.id_kartun','=','kartun.id_kartun')->get();
        return view('siakad.mahasiswa.index',['pegawai'=>$pegawai]);
    }

    public function tambah(){
        $kartin=DB::table('kartun')->get();
        return view('siakad.mahasiswa.tambah',['kartun'=>$kartin]);
    }

    public function proses(Request $request)
    {
        // validasinya
        $messages = [
            'required' => ':attribute Wajib Di Isi',
        ];

        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jenis' => 'required',
            'kartun' => 'required',
        ],$messages);

        //end validasi

        // insert data

        DB::table('anime')->insert([
            'anime_nama'=>$request->nama,
            'anime_jenis'=>$request->jenis,
            'id_kartun'=>$request->kartun
        ]);

        // endinsert data


        return redirect('/siakad');
    }

    public function edit($id){
        $ambil=DB::table('anime')->where('id_anime',$id)->get();

            return view('siakad.mahasiswa.edit',['anim'=>$ambil]);
    }

    public function update(Request $request){
        DB::table('anime')->where(['id_anime'=>$request->id])->update([
            'anime_nama'=>$request->nama,
            'anime_jenis'=>$request->jenis,
            'id_kartun'=>$request->kartun
        ]);
        return redirect('/siakad');

    }
    public function hapus($id){
        DB::table('anime')->where('id_anime',$id)->delete();
        return redirect('/siakad');
    }
}
