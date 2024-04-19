<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Angkatan;
use App\Models\Anggota;
use DB;
class AngkatanApiController extends Controller
{


    public function angkatan(){
        $angkatan = Angkatan::all();

        if($angkatan){
            return response()->json([
                'message' => 'Data Angkatan Ada',
                'status' => true,
                'Angkatan' => $angkatan
            ],200);
        }else{
            return response()->json([
                'message' => 'Data Angkatan Tidak ada',
                'status' => false
            ],200);
        }
    }

    public function anggotaAngkatan(Request $request){

       
        $anggota = DB::table('anggotas')
            ->join('angkatans', 'angkatans.id', '=' , 'anggotas.id_angkatan')
            ->where('angkatans.id','=', $request->angkatan)
            ->select('anggotas.nama','anggotas.nim','anggotas.email','anggotas.no_hp','angkatans.angkatan')
            ->get();

        // dd($anggota);

        $angkatans = Angkatan::where('id', $request->angkatan)->first(); // ambil record angkatan yang punya ID seperti anggota

        if($anggota){
            // $anggota['angkatan'] = $angkatans->angkatan; // ini kalau mau ditambahin key angkatan misal nggak mau ngerubah id_angkatan
            // $anggota['id_angkatan'] = $angkatans->angkatan; // ini kalau mau dirubah id_angkatan jadi nama angkatan nya;

            return response()->json([
                'message' => 'Data Angkatan Ada',
                'status' => true,
                'Anggota' => $anggota
            ], 200);

        // if($anggota){
        //     return response()->json([
        //         'message' => 'Data Angkatan Ada',
        //         'status' => true,
        //         'Anggota' => $anggota,

        //     ],200);
        }else{
            return response()->json([
                'message' => 'Data Angkatan tidak ada',
                'status' => false
            ],200);
        }
    }
    public function getAnggota(){
        // $anggota = Anggota::all();

        $anggota = DB::table('anggotas')
            ->join('angkatans', 'angkatans.id', '=' , 'anggotas.id_angkatan')
            ->select('anggotas.nama','anggotas.nim','anggotas.email','anggotas.no_hp','angkatans.angkatan')
            ->get();

        if($anggota){
            return response()->json([
                'message' => 'Data Anggota ada',
                'status' => true,
                'Anggota' => $anggota
            ],200);
        }else{
            return response()->json([
                'message' => 'Tidak ada data anggota',
                'status' => false
            ],200);
        }
    }
    public function SearchAnggota(Request $request){
        
        // $anggota = Anggota::where('nama', 'LIKE', '%'. $request->anggota .'%')->get();
        $anggota = DB::table('anggotas')
        ->join('angkatans', 'angkatans.id', '=' , 'anggotas.id_angkatan')
        ->where('anggotas.nama','LIKE', '%'. $request->anggota .'%')
        ->select('anggotas.nama','anggotas.nim','anggotas.email','anggotas.no_hp','angkatans.angkatan')
        ->get();

        if($anggota){
            return response()->json([
                'message' => 'Data Anggota ada',
                'status' => true,
                'Anggota' => $anggota
            ],200);
        }else{
            return response()->json([
                'message' => 'Tidak ada data anggota',
                'status' => false
            ],200);
        }
    }
}
