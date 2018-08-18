<?php

namespace App\Http\Controllers;

use App\matakuliahModel;
use Illuminate\Http\Request;

class matakuliahController extends Controller
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
        $matakuliah = matakuliahModel::all();
        return view('matakuliah.index', compact('matakuliah', $matakuliah));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliah = new matakuliahModel($request->all());
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matakuliah = matakuliahModel::whereId($id)->firstOrFail();
        return view('matakuliah.show',compact('matakuliah',$matakuliah));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matakuliah = matakuliahModel::whereId($id)->firstOrFail();
        return view('matakuliah.edit',compact('matakuliah',$matakuliah));
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
        $matakuliah = matakuliahModel::findOrFail($id);
        $matakuliah->update($request->all());
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matakuliah = matakuliahModel::whereId($id)->firstOrFail();
        $matakuliah->update(array(                
                'isActive' => 0
            ));
        return redirect('/matakuliah');
    }
}
