<?php

namespace App\Http\Controllers;

use App\Models\AngkaKemiskinan;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadesResponse;


class KalkulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function get_kemiskinan(Request $request)
    {
        $kalkulasi = AngkaKemiskinan::where('id', $request->id)
                    ->get();
        return FacadesResponse::json($kalkulasi);
    }

    public function kalkulasi_kemiskinan(Request $request)
    {
        $nilai['indikator1'] = Penilaian::where('id', $request->indikator1)->get();
        $nilai['indikator2'] = Penilaian::where('id', $request->indikator2)->get();
        $nilai['indikator3'] = Penilaian::where('id', $request->indikator3)->get();
        $nilai['indikator4'] = Penilaian::where('id', $request->indikator4)->get();
        $nilai['indikator5'] = Penilaian::where('id', $request->indikator5)->get();
        $nilai['indikator6'] = Penilaian::where('id', $request->indikator6)->get();
        $nilai['indikator7'] = Penilaian::where('id', $request->indikator7)->get();
        $nilai['indikator8'] = Penilaian::where('id', $request->indikator8)->get();
        $nilai['indikator9'] = Penilaian::where('id', $request->indikator9)->get();
        $nilai['indikator10'] = Penilaian::where('id', $request->indikator10)->get();
        $nilai['indikator11'] = Penilaian::where('id', $request->indikator11)->get();
        $nilai['indikator12'] = Penilaian::where('id', $request->indikator12)->get();
        $nilai['indikator13'] = Penilaian::where('id', $request->indikator13)->get();
        $nilai['indikator14'] = Penilaian::where('id', $request->indikator14)->get();
        $nilai['indikator15'] = Penilaian::where('id', $request->indikator15)->get();
        $nilai['indikator16'] = Penilaian::where('id', $request->indikator16)->get();
        $nilai['indikator17'] = Penilaian::where('id', $request->indikator17)->get();
        $nilai['indikator18'] = Penilaian::where('id', $request->indikator18)->get();
        $nilai['indikator19'] = Penilaian::where('id', $request->indikator19)->get();
        $nilai['indikator20'] = Penilaian::where('id', $request->indikator20)->get();
        return FacadesResponse::json($nilai);
    }

    public function calc_kemiskinan(Request $request)
    {
        AngkaKemiskinan::where('id', $request->id)
            ->update(['total_nilai' => $request->nilai, 'status' => $request->status]);
        return json_encode('data berhasil disimpan'); 
    }

    public function check_nik(Request $request)
    {
        $nik = AngkaKemiskinan::where('nik', $request->nik)->get();
        return json_encode($nik);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
