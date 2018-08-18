<?php

namespace App\Http\Controllers;

use App\periodeModel;
use Illuminate\Http\Request;

class periodeController extends Controller
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
        $periode = periodeModel::all();
        return view('periode.index', compact('periode', $periode));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periode = new periodeModel($request->all());
        $periode->save();
        return redirect('/periode');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $periode = periodeModel::whereId($id)->firstOrFail();
        return view('periode.show',compact('periode',$periode));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periode = periodeModel::whereId($id)->firstOrFail();
        return view('periode.edit',compact('periode',$periode));
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
        $periode = periodeModel::findOrFail($id);
        $periode->update($request->all());
        return redirect('/periode');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periode = periodeModel::whereId($id)->firstOrFail();
        $periode->update(array(
                'isActive' => 0
            ));
        return redirect('/periode');
    }
}
