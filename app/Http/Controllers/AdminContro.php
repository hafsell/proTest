<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class AdminContro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $etudiants = User::where('isAdmin','!',true)->paginate(3);
        return  view('admin.index',['etudiants'=>$etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'digits:10'],
            'dateNaissance' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
            
       
        
        ]);
        $user=new User();
        $user->nom =$request->nom;
        $user->prenom =$request->prenom;
         $user->dateNaissance =$request->dateNaissance;
        $user->telephone =$request->telephone;
        $user->filiere =$request->filiere;
        $user->email =$request->email;
        //pour que l etudiant ikun 3ndu f mdp smiytu+2021
        //$user->password= Hash::make($request->nom.'2021');
$user->save();
//irj3 lur u i affichi lih had msg
return redirect()->back()->with('success','student successfuly added');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user =User::find($id);
        return   response()->json($user);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'digits:10'],
            'dateNaissance' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
            ]);
            
        $user=User::find($request->id);
        $user->nom =$request->nom;
        $user->prenom =$request->prenom;
         $user->dateNaissance =$request->dateNaissance;
        $user->telephone =$request->telephone;
        $user->filiere =$request->filiere;
        $user->email =$request->email;
        //pour que l etudiant ikun 3ndu f mdp smiytu+2021
        //$user->password= Hash::make($request->nom.'2021');
$user->save();
//irj3 lur u i affichi lih had msg
return redirect()->back()->with('success','student successfuly added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect()->back()->with('success','student successfuly deleted');
    }
}
