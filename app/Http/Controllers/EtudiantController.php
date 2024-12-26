<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Etudiant;
use App\Models\User;

class EtudiantController extends Controller
{
    public function Liste_des_etudiants()
    {

        $etudiants = Etudiant::paginate(3);
        return view('etudiants.Liste', compact('etudiants'));
    }

    public function ajoue_etudiants(){
        return view('etudiants.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request){
        $request->validate( [
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom=$request->nom;
        $etudiant->prenom=$request->prenom;
        $etudiant->classe=$request->classe;
        $etudiant->save();

        return redirect('/etudiants')->with('status', 'L\'etudiant à bien été ajouter avec succées');

    }

    public function modifier_etudiants($id){
        $etudiants = Etudiant::find($id);
        return view('etudiants.modifier', compact('etudiants'));
    }

    public function modifier_etudiant_traitement(Request $request){

        $request->validate( [
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();

        return redirect('/etudiants')->with('status', 'L\'etudiant à bien été modifier avec succées');
    }

    public function supprimer_etudiants($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiants')->with('status', 'L\'etudiant à bien été supprimer avec succées');
    }
}
