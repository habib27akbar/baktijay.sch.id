<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class TahunAkademik
{
    public static function get_thnakad($parameter)
    {
        $nama_thnakad = substr($parameter, 0, -1);
        $nama_thnakad .= " / ";
        $nama_thnakad .= substr($parameter, 0, -1) + 1;
        $nama_thnakad .= " ";
        if (substr($parameter, -1) == '1') {
            $nama_thnakad .= "Ganjil";
        } else {
            $nama_thnakad .= "Genap";
        }

        return $nama_thnakad;
    }
}
