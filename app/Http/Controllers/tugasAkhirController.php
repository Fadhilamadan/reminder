<?php

namespace App\Http\Controllers;

use App\tugasAkhirModel;
use App\mahasiswaModel;
use App\dosenModel;
use App\periodeModel;
use Illuminate\Http\Request;

class tugasAkhirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas_akhir    = tugasAkhirModel::all();
        $mahasiswa      = mahasiswaModel::where('isActive', 1)->get();
        $dosen          = dosenModel::where('acceptTA', 1)->where('isActive', 1)->get();
        $periode        = periodeModel::where('isActive', 1)->get();

        return view('tugas_akhir.index', compact('tugas_akhir', $tugas_akhir, 
                                                    'mahasiswa', $mahasiswa, 
                                                    'dosen', $dosen, 
                                                    'periode', $periode));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa  = mahasiswaModel::where('isActive', 1)->get();
        $dosen      = dosenModel::where('acceptTA', 1)->where('isActive', 1)->get();
        $periode    = periodeModel::where('isActive', 1)->get();

        return view('tugas_akhir.create', compact('mahasiswa', $mahasiswa, 
                                                    'dosen', $dosen, 
                                                    'periode', $periode));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen1     = dosenModel::find($request->get('dosen_satu_id'));
        $dosen2     = dosenModel::find($request->get('dosen_dua_id'));
        $mahasiswa  = mahasiswaModel::find($request->get('mahasiswa_id'));
        $periode    = periodeModel::find($request->get('periode_id'));

        $tugas_akhir = new tugasAkhirModel(array(
                        'title'    => $request->get('title'),
                        'isActive' => $request->get('isActive')));

        $tugas_akhir->dosen_satu()->associate($dosen1);
        $tugas_akhir->dosen_dua()->associate($dosen2);
        $tugas_akhir->mahasiswa()->associate($mahasiswa);
        $tugas_akhir->periode()->associate($periode);
        $tugas_akhir->save();

        return redirect('/tugas_akhir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tugas_akhir  = tugasAkhirModel::whereId($id)->firstOrFail();
        $mahasiswa    = mahasiswaModel::where('isActive', 1)->get();
        $dosen        = dosenModel::where('acceptTA', 1)->where('isActive', 1)->get();
        $periode      = periodeModel::where('isActive', 1)->get();

        return view('tugas_akhir.show', compact('tugas_akhir', $tugas_akhir, 
                                                 'mahasiswa', $mahasiswa, 
                                                 'dosen', $dosen, 
                                                 'periode', $periode));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas_akhir  = tugasAkhirModel::whereId($id)->firstOrFail();
        $mahasiswa    = mahasiswaModel::where('isActive', 1)->get();
        $dosen        = dosenModel::where('acceptTA', 1)->where('isActive', 1)->get();
        $periode      = periodeModel::where('isActive', 1)->get();

        return view('tugas_akhir.edit', compact('tugas_akhir', $tugas_akhir, 
                                                'mahasiswa', $mahasiswa, 
                                                'dosen', $dosen, 
                                                'periode', $periode));
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
        $ta = tugasAkhirModel::findOrFail($id);
        $ta->update($request->all());

        return redirect('/tugas_akhir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ta = tugasAkhirModel::whereId($id)->firstOrFail();
        $ta->update(array(
                'isActive' => 0
            ));
        return redirect('/tugas_akhir');
    }
}
