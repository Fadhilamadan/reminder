<?php

namespace App\Http\Controllers;

use App\kerjaPraktekModel;
use App\mahasiswaModel;
use App\dosenModel;
use App\periodeModel;
use Illuminate\Http\Request;

class kerjaPraktekController extends Controller
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
        $kerja_praktek  = kerjaPraktekModel::all();
        $mahasiswa      = mahasiswaModel::where('isActive', 1)->get();
        $dosen          = dosenModel::where('acceptKP', 1)->where('isActive', 1)->get();
        $periode        = periodeModel::where('isActive', 1)->get();

        return view('kerja_praktek.index', compact('kerja_praktek', $kerja_praktek, 
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
        $dosen      = dosenModel::where('acceptKP', 1)->where('isActive', 1)->get();
        $periode    = periodeModel::where('isActive', 1)->get();

        return view('kerja_praktek.create', compact('mahasiswa', $mahasiswa, 
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
        $mahasiswa1 = mahasiswaModel::find($request->get('mahasiswa_satu_id'));
        $mahasiswa2 = mahasiswaModel::find($request->get('mahasiswa_dua_id'));
        $dosen      = dosenModel::find($request->get('dosen_id'));
        $periode    = periodeModel::find($request->get('periode_id'));

        $kerja_praktek = new kerjaPraktekModel(array(
                            'title'     => $request->get('title'),
                            'isActive'  => $request->get('isActive')));

        $kerja_praktek->mahasiswa_satu()->associate($mahasiswa1);
        $kerja_praktek->mahasiswa_dua()->associate($mahasiswa2);
        $kerja_praktek->dosen_pembimbing()->associate($dosen);
        $kerja_praktek->periode()->associate($periode);
        $kerja_praktek->save();

        return redirect('/kerja_praktek');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kerja_praktek  = kerjaPraktekModel::whereId($id)->firstOrFail();
        $mahasiswa      = mahasiswaModel::where('isActive', 1)->get();
        $dosen          = dosenModel::where('acceptKP', 1)->where('isActive', 1)->get();
        $periode        = periodeModel::where('isActive', 1)->get();

        return view('kerja_praktek.show', compact('kerja_praktek', $kerja_praktek, 
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
        $kerja_praktek  = kerjaPraktekModel::whereId($id)->firstOrFail();
        $mahasiswa      = mahasiswaModel::where('isActive', 1)->get();
        $dosen          = dosenModel::where('acceptKP', 1)->where('isActive', 1)->get();
        $periode        = periodeModel::where('isActive', 1)->get();

        return view('kerja_praktek.edit', compact('kerja_praktek', $kerja_praktek, 
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
        $kerja_praktek = kerjaPraktekModel::findOrFail($id);
        $kerja_praktek->update($request->all());

        return redirect('/kerja_praktek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kerja_praktek = kerjaPraktekModel::whereId($id)->firstOrFail();
        $kerja_praktek->update(array(
                'isActive' => 0
            ));
        return redirect('/kerja_praktek');
    }
}
