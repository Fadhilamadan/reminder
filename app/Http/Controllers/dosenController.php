<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosenModel;
use App\User;
use Hash;

class dosenController extends Controller
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
        $dosen = dosenModel::all();
        return view('dosen.index', compact('dosen', $dosen));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
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
                if($_FILES['photo']['size'] > (1024000)) /*can't be larger than 1 MB*/ { $photo = ""; }
                else
                {
                    if ($_FILES['photo']['type'] == 'image/jpeg' ||
                        $_FILES['photo']['type'] == 'image/jpg' ||
                        $_FILES['photo']['type'] == 'image/png') {
                        
                        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . 
                                            '/Reminder/public/uploads/' . $request->npk . "." . $ext);
                        $photo = $ext; }
                    else { $photo = ""; }
                }
            }
        }

        $acceptKP = 1;
        $acceptTA = 1;
        if(!$request->get('acceptKP')){ $acceptKP = 0; }
        if(!$request->get('acceptTA')){ $acceptTA = 0; }

        $password = bcrypt('password');

        $dosen = new dosenModel(array(
                'npk'       => $request->get('npk'),
                'name'      => $request->get('name'),
                'password'  => $password,
                'photo'     => $photo,
                'acceptKP'  => $acceptKP,
                'acceptTA'  => $acceptTA,
                'isActive'  => $request->get('isActive'),
                ));
        $dosen->save();

        $emailDosen = $request->get('npk') . '@staff.ubaya.ac.id';
        $user = new User(array(
            'name' => $request->get('name'),
            'email' => $emailDosen,
            'password' => Hash::make($request->get('password')),
            'owner' => '3',
            'owner_id' => $dosen->id
            ));
        $user->save();
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = dosenModel::whereId($id)->firstOrFail();
        return view('dosen.show',compact('dosen',$dosen));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = dosenModel::whereId($id)->firstOrFail();
        return view('dosen.edit',compact('dosen',$dosen));
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
        $dosen = dosenModel::findOrFail($id);
     
        $photo = $dosen->photo;
        if($_FILES['photo']['name'])
        {
            $file_info = getimagesize($_FILES['photo']['tmp_name']);
            if(empty($file_info)) { $photo = $dosen->photo; }
            else {
                if($_FILES['photo']['size'] > (1024000)) /*can't be larger than 1 MB*/{ $photo = $dosen->photo; }
                else
                {
                    if ($_FILES['photo']['type'] == 'image/jpeg' ||
                        $_FILES['photo']['type'] == 'image/jpg' ||
                        $_FILES['photo']['type'] == 'image/png') {
                        
                        if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/Reminder/public/uploads/' . 
                                        $dosen->npk . "." . $dosen->photo))

                            unlink($_SERVER['DOCUMENT_ROOT'] . '/Reminder/public/uploads/' . 
                                    $dosen->npk . "." . $dosen->photo);

                        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . 
                                            '/Reminder/public/uploads/' . $request->npk . "." . $ext);
                        $photo = $ext; }
                    else { $photo = $dosen->photo; }
                }
                
            }
        }

        $password = $request->get('password');
        $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
        $password = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey))));

        $acceptKP = 1;
        $acceptTA = 1;
        if(!$request->get('acceptKP')){ $acceptKP = 0; }
        if(!$request->get('acceptTA')){ $acceptTA = 0; }

        $dosen->update(array(
                'name'      => $request->get('name'),
                'password'  => $password,
                'photo'     => $photo,
                'acceptKP'  => $acceptKP,
                'acceptTA'  => $acceptTA,
                'isActive'  => $request->get('isActive'),
                ));

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosenModel::whereId($id)->firstOrFail();
        $dosen->update(array(
                'isActive' => 0
            ));
        return redirect('/dosen');
    }
}