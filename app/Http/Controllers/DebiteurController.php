<?php

namespace App\Http\Controllers;

use App\Models\Debiteur;
use Illuminate\Http\Request;

class DebiteurController extends Controller
{
    public function add_debiteur(){
        return view('/debiteur.add');
    }

    public function store_debiteur(Request $request){
        $request->validate([
            'nom_deb' => 'required',
            'prenom_deb' => 'required',
            'type_deb' => 'required',
            'adresse_deb' => 'required',
            'num_deb' => 'required',
            'num_compteur' => 'required',
            'num_facture' => 'required',
            'date_facture' => 'required',
            'montant_recouvrer' => 'required',
        ]);
        $data = Debiteur::create([
            'nom_deb' => $request->nom_deb,
            'prenom_deb' => $request->prenom_deb,
            'type_deb' => $request->type_deb,
            'adresse_deb' => $request->adresse_deb,
            'num_deb' => $request->num_deb,
            'num_compteur' => $request->num_compteur,
            'num_facture' => $request->num_facture,
            'date_facture' => $request->date_facture,
            'montant_recouvrer' => $request->montant_recouvrer,
        ]);
        if ($data){
            return redirect()->route('add_debiteur')->with('success', 'Debiteur ajouté avec succès');
        }
        else{
            return redirect()->route('add_debiteur')->with('fail', 'Erreur lors de l\'ajout du debiteur');
        }

    }
    public function edit_debiteur(){
        $debiteurs = Debiteur::all();
        return view('/debiteur.edit', ['debiteurs'=>$debiteurs]);
    }

    public function edit(Request $request, $id){
        $debiteur = Debiteur::find($id);
        return view('/debiteur.edit', ['debiteur'=>$debiteur]);
    }
    public function update(Request $request, $id){
        $debiteur = Debiteur::find($id);
     $debiteur->update([
            'nom_deb' => $request->nom_deb,
            'prenom_deb' => $request->prenom_deb,
            'type_deb' => $request->type_deb,
            'adresse_deb' => $request->adresse_deb,
            'num_deb' => $request->num_deb,
            'num_compteur' => $request->num_compteur,
            'num_facture' => $request->num_facture,
            'date_facture' => $request->date_facture,
            'montant_recouvrer' => $request->montant_recouvrer,
       ]);
       if ($debiteur){
           return redirect()->route('edit_debiteur')->with('success', 'Debiteur modifié avec succès');
       }
       else {
              return redirect()->route('edit_debiteur')->with('fail', 'Erreur lors de la modification du debiteur');
       }
    }

}
