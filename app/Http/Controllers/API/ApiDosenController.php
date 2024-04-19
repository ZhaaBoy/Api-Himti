<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Dosen;
use Illuminate\Http\Request;

class ApiDosenController extends Controller
{

    public function getDataDosen(){
        $dosen = Dosen::all();

        if($dosen){
            return response()->json([
                'message' => 'data dosen ada',
                'status' => true,
                'Dosen' =>$dosen
            ],200);
        }else{
            return response()->json([
                'message' => 'data dosen tidak ada',
                'status' => false

            ],200);
        }
    }

    public function searchDosen(Request $request){
        // $dosen = $request->dosen;

        $data = Dosen::where('nama', 'like', '%'.$request->nama.'%')->get();

        if($data){
            return response()->json([
                'message' =>'data dosen ada',
                'status' => true,
                'dosen' => $data

            ],200);
        }else{
            return response()->json([
                'message' =>'data dosen tidak ada',
                'status' => false

            ],200); 
        }
    }
}
