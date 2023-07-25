<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Annee_academique;
use App\Models\Cycle;
use App\Models\filliere;
use App\Models\Etudiant;
use App\Models\Niveau_etude;
use App\Models\Nationnalité;
use Illuminate\Support\Facades\Hash;


class CarteController extends Controller
{
    // use Notifiable;

    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new \Illuminate\Auth\Notifications\VerifyEmail);
    // }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('form');
        return redirect ('/liste')->with('succes', 'Enregistrer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin(Request $request)
    {

        return view ('formadmin');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {
      
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function travail()
    {
        return view ('espaceadmin');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function travail1()
    {
        return view ('espacesecretaire');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function espaceparametre()
    {
        return view ('parametre');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Admin $admin, Request $request)
    {
        
        $admin->nom = $request->input('nom');
        $admin->prenom = $request->input('prenom');
        $admin->mail = $request->input('mail');
        $admin->mot_passe = bcrypt($request->input('mot_passe'));
        $admin->role = $request->input('role');
        $admin->save();
        return redirect('/')->with('succes', 'Enregistrer');
    }

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store6 (Etudiant $etudiant,Request $request)
    {
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->matricule = $request->input('matricule');
        // $etudiant->photo = $request->input('photo');
        $etudiant->cycle = $request->input('cycle');
        $etudiant->annee_academique = $request->input('annee_academique');
        $etudiant->filliere = $request->input('filliere');
        $etudiant->niveau_etude = $request->input('niveau_etude');
        $etudiant->nationnalite = $request->input('nationnalité');
       
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/image');
            $etudiant->photo_path = basename($photoPath); // Sauvegarde uniquement le nom du fichier dans la base de données
            $etudiant->save();
        }
        $etudiant->save();

          
        return redirect('/liste')->with('succes', 'Enregistrer');
    }




     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Cycle $cycle, Request $request)
    {
      
        $cycle->cycle = $request->input('cycle');
        $cycle->save();
        return redirect('/parametre')->with('succes', 'Enregistrer');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Annee_academique $annee, Request $request)
    {
      
        $annee->annee_academique = $request->input('annee_academique');
        $annee->save();
        return redirect('/parametre')->with('succes', 'Enregistrer');
      
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Filliere $filliere, Request $request)
    {
      
        $filliere->filliere = $request->input('filliere');
        $filliere->save();
        return redirect('/parametre')->with('succes', 'Enregistrer');
      
    }

    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store4(Niveau_etude $niveau, Request $request)
    {
      
        $niveau->niveau_etude = $request->input('niveau_etude');
        $niveau->save();
        return redirect('/parametre')->with('succes', 'Enregistrer');
      
    }


    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store5(Nationnalité $nationnalite, Request $request)
    {
      
        $nationnalite->nationnalité = $request->input('nationnalité');
        $nationnalite->save();
        return redirect('/parametre')->with('succes', 'Enregistrer');
      
    }


    public function list()
    {
     $etudiant = Etudiant::paginate(4);
     return view ('liste', [
         'etudiants' => $etudiant,
     ]);
       

    
    }


    



    public function delete($id)
       {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect()->route('liste')->with('succes', 'Supprimer');
       }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view('details' ,[
            'etudiant'=> $etudiant, 
        ]);
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function carte($id)
    {
        $etudiant = Etudiant::find($id);
        return view('carte' ,[
            'etudiant'=> $etudiant, 
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('edit' ,[
            'etudiant'=> $etudiant, 
        ]);
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
         
        $etudiant = Etudiant::Find($id);
        $etudiant->nom = $request['nom'];
        $etudiant->prenom =  $request['prenom'];
        $etudiant->matricule = $request['matricule'];
        $etudiant->photo =  $request['photo'];

        $etudiant->save();
        return redirect()->route('liste')->with('success', 'Etudiant modifier');
    }


    public function login(Admin $admin,Request $request)
    {
       
        $admin = Admin::where('mail', $request->input('mail'))->first();

        if($admin){
                if(Hash::check($request->input('mot_passe'), $admin->mot_passe)){
                    $request->session()->put('admin', $admin);
                    return redirect('/espace1');
                    
                }else{
                    return back()->with('status','identifiant ou mot de passe incorrect');
                }
        } else{
            return back()->with('status','vous n\'avez pas de compte avec ce mail');
        }
        
        
    }

    public function logout(Request $request)
    {
      $request->session()->forget('admin');
      return redirect('/')->with('status', 'Deconnecté.');
    }
    


}
