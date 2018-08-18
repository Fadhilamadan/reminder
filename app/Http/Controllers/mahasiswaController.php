<?php

namespace App\Http\Controllers;

use App\mahasiswaModel;
use Hash;
use App\User;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
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
        $mahasiswa = mahasiswaModel::all();
        return view('mahasiswa.index', compact('mahasiswa', $mahasiswa));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = "";
        if($_FILES['photo']['name'])
        {
            $file_info = getimagesize($_FILES['photo']['tmp_name']);

            if(empty($file_info)) { $photo = ""; }
            else {
                if($_FILES['photo']['size'] > (1024000)) /*can't be larger than 1 MB*/{ $photo = ""; }
                else
                {
                    if ($_FILES['photo']['type'] == 'image/jpeg' ||
                        $_FILES['photo']['type'] == 'image/jpg' ||
                        $_FILES['photo']['type'] == 'image/png') {
                        
                        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . 
                                            '/Reminder/public/uploads/' . $request->nrp . "." . $ext);
                        $photo = $ext; }
                    else { $photo = "";}
                }  
            }
        }
        
        $password = bcrypt('password');

        $mahasiswa = new mahasiswaModel(array(
                    'nrp'       => $request->get('nrp'),
                    'name'      => $request->get('name'),
                    'password'  => $password,
                    'photo'     => $photo,
                    'isActive'  => $request->get('isActive')
                    ));
        $mahasiswa->save();

        $emailMhs = $request->get('nrp') . '@student.ubaya.ac.id';
        $user = new User(array(
            'name' => $request->get('name'),
            'email' => $emailMhs,
            'password' => Hash::make($request->get('password')),
            'owner' => '2',
            'owner_id' => $mahasiswa->id
            ));
        $user->save();
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = mahasiswaModel::whereId($id)->firstOrFail();

        return view('mahasiswa.show',compact('mahasiswa',$mahasiswa));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = mahasiswaModel::findOrFail($id);

        return view('mahasiswa.edit',compact('mahasiswa',$mahasiswa));
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
        $mahasiswa = mahasiswaModel::findOrFail($id);
        $photo = $mahasiswa->photo;
        if($_FILES['photo']['name'])
        {
            $file_info = getimagesize($_FILES['photo']['tmp_name']);

            if(empty($file_info)) { $photo = $mahasiswa->photo; }
            else {
                if($_FILES['photo']['size'] > (1024000))/* can't be larger than 1 MB*/{$photo = $mahasiswa->photo;}
                else
                {
                    if ($_FILES['photo']['type'] == 'image/jpeg' ||
                        $_FILES['photo']['type'] == 'image/jpg' ||
                        $_FILES['photo']['type'] == 'image/png') {
                        
                        if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/Reminder/public/uploads/' . 
                                        $mahasiswa->nrp . "." . $mahasiswa->photo))
                            unlink($_SERVER['DOCUMENT_ROOT'] . '/Reminder/public/uploads/' . 
                                        $mahasiswa->nrp . "." . $mahasiswa->photo);

                        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . 
                                            '/Reminder/public/uploads/' . $request->nrp . "." . $ext);
                        $photo = $ext;}
                    else { $photo = $mahasiswa->photo; }
                }
                
            }
        }
        
        $password = $request->get('password');
        $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
        $password = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey))));

        $mahasiswa->update(array(
                    'name'      => $request->get('name'),
                    'password'  => $password,
                    'photo'     => $photo,
                    'isActive'  => $request->get('isActive')
                    ));

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswaModel::findOrFail($id);
        $mahasiswa->update(array(
                    'isActive' => 0
                ));
        return redirect('/mahasiswa');
    }
}