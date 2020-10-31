<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKecamatanController extends Controller
{
    public function index(){
       $kecamatan=DB::table('tbl_data_kecamatan')->get();

       return view('siakad.data_kecamatan.index',['kecamatan'=>$kecamatan]);
    }

    public function tambah(){

        return view('siakad.data_kecamatan.tambah');
    }

    public function proses(Request $request)
    {
        // validasinya
        $messages = [
            'required' => ':attribute Wajib Di Isi',
        ];

        $this->validate($request,[
            'namakecamatan' => 'required|min:5|max:20',

        ],$messages);

        //end validasi

        // insert data

        DB::table('tbl_data_kecamatan')->insert([
            'nm_kec'=>$request->namakecamatan,
        ]);

        // endinsert data


        return redirect('/kecamatan/index');
    }

    public function edit($id){
        $kecamatan=DB::table('tbl_data_kecamatan')->where('id_kec',$id)->get();

            return view('siakad.data_kecamatan.edit',['kecamatan'=>$kecamatan]);
    }

    public function update(Request $request){
        DB::table('tbl_data_kecamatan')->where(['id_kec'=>$request->id])->update([
            'nm_kec'=>$request->namakecamatan,
        ]);
        return redirect('/kecamatan/index');

    }
    public function hapus($id){
        DB::table('tbl_data_kecamatan')->where('id_kec',$id)->delete();
        return redirect('/kecamatan/index');
    }
}
