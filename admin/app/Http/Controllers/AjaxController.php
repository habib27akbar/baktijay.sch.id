<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAkademikModel;
use App\Models\WaktuModel;

class AjaxController extends Controller
{
    public function post_check_thnakad(Request $request)
    {

        //var_dump($request->all('tahun'));

        $data = TahunAkademikModel::where('kode', $request->input('tahun'))->get();
        echo count($data);
        //return response()->json($data);
        //var_dump($data);
        //echo "success";
    }

    public function post_check_waktu(Request $request)
    {

        //var_dump($request->input('hari'));
        $post_hari = $request->input('hari');
        $search = 0;
        if ($post_hari == 'SENIN') {
            $search = 1;
        } elseif ($post_hari == 'SELASA') {
            $search = 2;
        } elseif ($post_hari == 'RABU') {
            $search = 3;
        } elseif ($post_hari == 'KAMIS') {
            $search = 4;
        } elseif ($post_hari == 'JUMAT') {
            $search = 5;
        } elseif ($post_hari == 'SABTU') {
            $search = 6;
        }
        $results = WaktuModel::where('kode', 'LIKE', $search . '%')->latest('created_at')->first();
        return $results;
        //var_dump($results);
        //echo "a";
        // $data = TahunAkademikModel::where('kode', $request->input('tahun'))->get();
        // echo count($data);
        //return response()->json($data);
        //var_dump($data);
        //echo "success";
    }
}
