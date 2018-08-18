<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matakuliahMahasiswaPeriodeModel;
use App\matakuliahModel;
use App\mahasiswaModel;
use App\periodeModel;

class naryMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal_mahasiswa = matakuliahMahasiswaPeriodeModel::all();
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $mahasiswa = mahasiswaModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_mahasiswa.index', compact('jadwal_mahasiswa', $jadwal_mahasiswa, 'matakuliah', $matakuliah, 'mahasiswa', $mahasiswa, 'periode', $periode));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $mahasiswa = mahasiswaModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_mahasiswa.create', compact('matakuliah', $matakuliah, 'mahasiswa', $mahasiswa, 'periode', $periode));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = mahasiswaModel::find($request->get('mahasiswa_id'));
        $matakuliah = matakuliahModel::find($request->get('matakuliah_id'));
        $periode = periodeModel::find($request->get('periode_id'));

        $jadwal_mahasiswa = new matakuliahMahasiswaPeriodeModel();
        $jadwal_mahasiswa->mahasiswa()->associate($mahasiswa);
        $jadwal_mahasiswa->matakuliah()->associate($matakuliah);
        $jadwal_mahasiswa->periode()->associate($periode);
        $jadwal_mahasiswa->save();

        return redirect('/jadwal_mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal_mahasiswa = matakuliahMahasiswaPeriodeModel::whereId($id)->firstOrFail();
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $mahasiswa = mahasiswaModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_mahasiswa.show', compact('jadwal_mahasiswa', $jadwal_mahasiswa, 'matakuliah', $matakuliah, 'mahasiswa', $mahasiswa, 'periode', $periode));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal_mahasiswa = matakuliahMahasiswaPeriodeModel::whereId($id)->firstOrFail();
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $mahasiswa = mahasiswaModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_mahasiswa.edit', compact('jadwal_mahasiswa', $jadwal_mahasiswa, 'matakuliah', $matakuliah, 'mahasiswa', $mahasiswa, 'periode', $periode));
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
        $mahasiswa = mahasiswaModel::find($request->get('mahasiswa_id'));
        $matakuliah = matakuliahModel::find($request->get('matakuliah_id'));
        $periode = periodeModel::find($request->get('periode_id'));


        $jadwal_mahasiswa = matakuliahMahasiswaPeriodeModel::findOrFail($id);
        $jadwal_mahasiswa->dosen()->associate($mahasiswa);
        $jadwal_mahasiswa->matakuliah()->associate($matakuliah);
        $jadwal_mahasiswa->periode()->associate($periode);
        $jadwal_mahasiswa->save();
        return redirect('/jadwal_mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal_mahasiswa = matakuliahMahasiswaPeriodeModel::whereId($id)->firstOrFail();
        $jadwal_mahasiswa->delete();
        return redirect('/jadwal_mahasiswa');
    }
}
