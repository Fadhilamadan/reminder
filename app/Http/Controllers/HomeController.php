<?php

namespace App\Http\Controllers;

use Auth;
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
use Session;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('home_login.login_admin');
    }

    public function index_mahasiswa()
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
        $id            = 0;
        $param         = 'a';
        $myDosen       = 'a';
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

    public function index_dosen()
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

        $dosenMils = dosenModel::whereId(Auth::user()->owner_id)->firstOrFail();
        $dosenMils = $dosenMils->reminder_time * 1;
        $mils = intval(microtime(true)*1000);
        $slotRemind = slotModel::where('start', '>=', $mils+$dosenMils)->where('dosen_id', '=', Auth::user()->owner_id)->first();
        $seconds = $slotRemind->start / 1000;
        $message = 'You have an event on ' . date("d-m-Y", $seconds);
        Session::flash('message', $message);
        Session::flash('alert-class', 'alert-danger');

        return view('home_login.login_dosen',
                compact('tugas_akhir', $tugas_akhir, 
                        'mahasiswa', $mahasiswa,
                        'matakuliah', $matakuliah, 
                        'dosen', $dosen, 
                        'periode', $periode,
                        'kerja_praktek', $kerja_praktek,
                        'slot', $slot,
                        'chat', $chat,
                        'jenis_konsul', $jenis_konsul,
                        'slot_mhs', $slot_mhs)
                );
    }
}
