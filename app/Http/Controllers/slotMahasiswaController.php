<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slotModel;
use App\mahasiswaModel;
use App\dosenModel;
use App\matakuliahModel;
use App\kerjaPraktekModel;
use App\tugasAkhirModel;
use App\periodeModel;
use App\chatModel;
use App\matkulPeriodeDosenModel;
use App\jenisKonsulModel;
use App\slot_mhs;
use App\matakuliahMahasiswaPeriodeModel;

class slotMahasiswaController extends Controller
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
        $slot = new slotModel($request->all());
        $slot->save();
        return redirect('/user/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matkulDosen   = matkulPeriodeDosenModel::all();
        $matkulMhs     = matakuliahMahasiswaPeriodeModel::all();
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
        $param         = '../';
        $namaDosen     = dosenModel::findOrFail($id);
        $myDosen       = $namaDosen->npk . ' - ' . $namaDosen->name;

        return view('home_login.login_mahasiswa',
                compact('tugas_akhir', $tugas_akhir, 
                        'matkulMhs', $matkulMhs, 
                        'matkulDosen', $matkulDosen, 
                        'mahasiswa', $mahasiswa, 
                        'matakuliah', $matakuliah, 
                        'dosen', $dosen, 
                        'periode', $periode,
                        'kerja_praktek', $kerja_praktek,
                        'slot', $slot,
                        'chat', $chat,
                        'jenis_konsul', $jenis_konsul,
                        'slot_mhs', $slot_mhs,
                        'id', $id,
                        'param', $param,
                        'myDosen', $myDosen)
                );
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
        $slot = slotModel::findOrFail($id);
        $slot->update($request->all());
        return redirect('/user/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slot = slotModel::whereId($id)->firstOrFail();
        $slot->delete();
        return redirect('/user/mahasiswa');
    }
}
