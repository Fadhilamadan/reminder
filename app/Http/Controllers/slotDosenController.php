<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slotModel;
use App\slot_mhs;

class slotDosenController extends Controller
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
        $slot = slotModel::all();
        $all_req = slot_mhs::all();
        return view('slot.index', compact('slot', $slot,
                                          'all_req', $all_req));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slot.create');
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
        return redirect('/user/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slot = slotModel::whereId($id)->firstOrFail();
        return view('slot.show',compact('slot',$slot));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slot = slotModel::whereId($id)->firstOrFail();
        return view('slot.edit',compact('slot',$slot));
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
        $slot = slotModel::whereId($id)->firstOrFail();
        $slot->delete();
        return redirect('/user/dosen');
    }
}
