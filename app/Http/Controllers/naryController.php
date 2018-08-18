<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matkulPeriodeDosenModel;
use App\matakuliahModel;
use App\dosenModel;
use App\periodeModel;

class naryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal_dosen = matkulPeriodeDosenModel::all();
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $dosen = dosenModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_dosen.index', compact('jadwal_dosen', $jadwal_dosen, 'matakuliah', $matakuliah, 'dosen', $dosen, 'periode', $periode));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $dosen = dosenModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_dosen.create', compact('matakuliah', $matakuliah, 'dosen', $dosen, 'periode', $periode));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = dosenModel::find($request->get('dosen_id'));
        $matakuliah = matakuliahModel::find($request->get('matakuliah_id'));
        $periode = periodeModel::find($request->get('periode_id'));

        $jadwal_dosen = new matkulPeriodeDosenModel();
        $jadwal_dosen->dosen()->associate($dosen);
        $jadwal_dosen->matakuliah()->associate($matakuliah);
        $jadwal_dosen->periode()->associate($periode);
        $jadwal_dosen->save();

        return redirect('/jadwal_dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal_dosen = matkulPeriodeDosenModel::whereId($id)->firstOrFail();
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $dosen = dosenModel::where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_dosen.show', compact('jadwal_dosen', $jadwal_dosen, 'matakuliah', $matakuliah, 'dosen', $dosen, 'periode', $periode));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal_dosen = matkulPeriodeDosenModel::whereId($id)->firstOrFail();
        $matakuliah = matakuliahModel::where('isActive', 0)->get();
        $dosen = dosenModel::where('acceptTA', 0)->where('isActive', 0)->get();
        $periode = periodeModel::where('isActive', 1)->get();
        return view('jadwal_dosen.edit', compact('jadwal_dosen', $jadwal_dosen, 'matakuliah', $matakuliah, 'dosen', $dosen, 'periode', $periode));
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
        $dosen = dosenModel::find($request->get('dosen_id'));
        $matakuliah = matakuliahModel::find($request->get('matakuliah_id'));
        $periode = periodeModel::find($request->get('periode_id'));


        $jadwal_dosen = matkulPeriodeDosenModel::findOrFail($id);
        $jadwal_dosen->dosen()->associate($dosen);
        $jadwal_dosen->matakuliah()->associate($matakuliah);
        $jadwal_dosen->periode()->associate($periode);
        $jadwal_dosen->save();
        return redirect('/jadwal_dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal_dosen = matkulPeriodeDosenModel::whereId($id)->firstOrFail();
        $jadwal_dosen->delete();
        return redirect('/jadwal_dosen');
    }
}
