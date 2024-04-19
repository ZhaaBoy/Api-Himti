<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Acara;
class AcaraApiController extends Controller
{


    public function getAcaraHimti(){
        $acarahimti = Acara::all();

        if($acarahimti){
            return response()->json([
                'message' =>"data ada",
                'status' => true ,
                'data artikel' => $acarahimti
            ], 200);
        }else{
            return response()->json([
                'message'=> "Data Tidak Ada",
                'status' => false
            ],200);
        }
    }

    public function getDetailAcara($id){
        $acara = Acara::find($id);
        if($acara){
            return response()->json([
                'message' =>"data ada",
                'status' => true ,
                'data artikel' => $acara
            ], 200);
        }else{
            return response()->json([
                'message'=> "Data Tidak Ada",
                'status' => false
            ],200);
        }
    }
}
