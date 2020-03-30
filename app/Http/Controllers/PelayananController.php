<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class PelayananController extends Controller
{
    //
    public function obatPasien()
    {
        // $rm= $request->query('rm');
        $lisinopril10 = "SELECT ta.DAT_PASIEN,ta.REG_KUNJUNGANPASIEN,ta.TGL_DISCHARGE,do.DAT_OBATALKES,tj.TRANS_JNSPELAYANAN FROM REG_KUNJUNGANPASIEN ta
                JOIN TRANS_AKOMODASI ak ON ta.REG_KUNJUNGANPASIEN = ak.REG_KUNJUNGANPASIEN
                JOIN TRANS_JNSPELAYANAN tj ON ak.TRANS_AKOMODASI = tj.TRANS_AKOMODASI
                JOIN DETAIL_TRANSOBATALKES dt ON tj.TRANS_JNSPELAYANAN = dt.TRANS_JNSPELAYANAN
                JOIN DAT_OBATALKES do ON dt.DAT_OBATALKES = do.DAT_OBATALKES

                WHERE dt.DAT_OBATALKES = '1081000017' ORDER BY ta.TGL_DISCHARGE DESC";
        $lisinopril5 = "SELECT ta.DAT_PASIEN,ta.REG_KUNJUNGANPASIEN,ta.TGL_DISCHARGE,do.DAT_OBATALKES,tj.TRANS_JNSPELAYANAN FROM REG_KUNJUNGANPASIEN ta
                JOIN TRANS_AKOMODASI ak ON ta.REG_KUNJUNGANPASIEN = ak.REG_KUNJUNGANPASIEN
                JOIN TRANS_JNSPELAYANAN tj ON ak.TRANS_AKOMODASI = tj.TRANS_AKOMODASI
                JOIN DETAIL_TRANSOBATALKES dt ON tj.TRANS_JNSPELAYANAN = dt.TRANS_JNSPELAYANAN
                JOIN DAT_OBATALKES do ON dt.DAT_OBATALKES = do.DAT_OBATALKES

                WHERE dt.DAT_OBATALKES = '1081000018' ORDER BY ta.TGL_DISCHARGE DESC";
        $all = "SELECT * FROM REG_KUNJUNGANPASIEN ta
                JOIN TRANS_AKOMODASI ak ON ta.REG_KUNJUNGANPASIEN = ak.REG_KUNJUNGANPASIEN
                JOIN TRANS_JNSPELAYANAN tj ON ak.TRANS_AKOMODASI = tj.TRANS_AKOMODASI
                JOIN DETAIL_TRANSOBATALKES dt ON tj.TRANS_JNSPELAYANAN = dt.TRANS_JNSPELAYANAN
                JOIN DAT_OBATALKES do ON dt.DAT_OBATALKES = do.DAT_OBATALKES

                WHERE dt.DAT_OBATALKES IN ('1081000018','1081000017')";

        $query_lisinopril10 = DB::select($lisinopril10);
        $query_lisinopril5 = DB::select($lisinopril5);
        $query_all = DB::select($all);

        // foreach ($query_all as $key => $value) {
        //     # code...
        //     print_r($value->DAT_OBATALKES);
        //     die();
        // }

        $showdata = [
            // 'idpasien' => $value['DAT_PASIEN'],
            'lisinopril10' => $query_lisinopril10,
            'lisinopril5' => $query_lisinopril5,
            'all' => $query_all
        ];

        return view('page.farmasi.cariobat')->with('list', $showdata);
    }
}
