<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\JadwalSharing;
use Illuminate\Http\Request;

class JadwalSharingApiController extends Controller
{
    public function sharing(){
        $sharing = JadwalSharing::all();

        if($sharing){
            return response()->json([
                'message' => 'Data Sharing Ada',
                'status' =>true,
                'Jadwal' => $sharing
            ],200);
        }else{
            return response()->json([
                'message' => 'Data Sharing Tidak ada',
                'status' => false
            ],200);
        }
    }

    public function getDetailsharing($id){
        $sharing = JadwalSharing::find($id);

        if($sharing){
            return response()->json([
                'message' => 'Data Sharing Ada',
                'status' => true,
                'Jadwal' => $sharing
            ],200);
        }else{
            return response()->json([
                'message' => 'Data Sharing Tidak ada',
                'status' =>false
            ],200);
        }
    }
}
