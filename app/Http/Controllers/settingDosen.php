<?php

namespace App\Http\Controllers;

use App\mahasiswaModel;
use App\dosenModel;
use App\matakuliahModel;
use App\kerjaPraktekModel;
use App\tugasAkhirModel;
use App\periodeModel;
use App\slotModel;
use App\chatModel;
use App\matkulPeriodeDosenModel;
use App\jenisKonsulModel;
use App\slot_mhs;
use App\matakuliahMahasiswaPeriodeModel;
use Illuminate\Http\Request;

class settingDosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $tugas_akhir   = tugasAkhirModel::all();
        $matakuliah    = matakuliahModel::all();
        $mahasiswa     = mahasiswaModel::all();
        $dosen         = dosenModel::all();
        $kerja_praktek = kerjaPraktekModel::all();
        $periode       = periodeModel::all();
        $chat          = chatModel::all();
        $slot          = slotModel::all();
        $jenis_konsul  = jenisKonsulModel::all();
        $slot_mhs      = slot_mhs::all();
        $dosenOK = dosenModel::findOrFail($id);

        return view('home_login.setting_dosen',
                compact('tugas_akhir', $tugas_akhir, 
                        'mahasiswa', $mahasiswa,
                        'matakuliah', $matakuliah, 
                        'dosen', $dosen, 
                        'periode', $periode,
                        'kerja_praktek', $kerja_praktek,
                        'slot', $slot,
                        'chat', $chat,
                        'jenis_konsul', $jenis_konsul,
                        'slot_mhs', $slot_mhs,
                        'dosenOK', $dosenOK)
                );
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
        $dosen = dosenModel::findOrFail($id);
        $mils = ($request->get('hour') * 3600 * 1000) + ($request->get('min') * 60 * 1000) + ($request->get('sec') * 1000);
        $dosen->update(array(
                'intensitas_mahasiswa'  => $request->get('inten'),
                'reminder_time'         => $mils
                ));
        return redirect('/user/dosen');
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
