<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SekolahModel;
use App\Models\TahunAkademikModel;
use App\Models\PendaftaranModel;

class PendaftaranController extends Controller
{
    public function index()
    {


        $data_sekolah = SekolahModel::all();
        //$data_thn_akademik = TahunAkademikModel::all();
        return view('pendaftaran.index', compact('data_sekolah'));
    }

    public function checkout($id)
    {
        $pendaftaran = PendaftaranModel::findOrFail($id);
        return view('pendaftaran.checkout', compact('pendaftaran'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $pendaftaran = PendaftaranModel::find($request->order_id);
                $pendaftaran->update(['status' => 1]);
            }
        }
    }

    public function store(Request $request)
    {
        $storeData = [
            'id_sekolah' => $request->input('id_sekolah'),
            'kd_angkatan' => $request->input('kd_angkatan'),
            'nama' => $request->input('nama'),
            'jk' => $request->input('jk'),
            'tmp_lahir' => $request->input('tmp_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'nik' => $request->input('nik'),
            'nisn' => $request->input('nisn'),
            'agama' => $request->input('agama'),
            'hubungan_keluarga' => $request->input('hubungan_keluarga'),
            'alamat' => $request->input('alamat'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'kodepos' => $request->input('kodepos'),
            'kecamatan' => $request->input('kecamatan'),
            'kelurahan' => $request->input('kelurahan'),
            'hp' => $request->input('hp'),
            'status' => 0
        ];
        $pendaftaran = PendaftaranModel::create($storeData);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pendaftaran->id,
                'gross_amount' => 100000,
            ),
            'customer_details' => array(
                'name' =>  $pendaftaran->nama,
                'phone' => $pendaftaran->hp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $updateData = [
            'snap_token' => $snapToken
        ];

        PendaftaranModel::where('id', $pendaftaran->id)->update($updateData);

        // $dataToken = ['snapToken' => $snapToken];
        //dd($snapToken);
        //return view('pendaftaran.checkout', compact('snapToken', 'pendaftaran'))->with('alert-success', 'Pendaftaran Sukses');
        return redirect('checkout/' . $pendaftaran->id)->with('alert-success', 'Pendaftaran Sukses');
    }
}
