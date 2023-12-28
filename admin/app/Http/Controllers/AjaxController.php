<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAkademikModel;

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
}
