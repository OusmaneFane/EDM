<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacturePayment;

class AccueilController extends Controller
{
    public function pay(){
        return view('/accueil.pay');
    }

    public function isago(){
        return view('/accueil.isago');
    }

    public function store_pay(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'montant' => 'required',
            

        ]);
        // dd($request->all());
        $data = FacturePayment::create([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'telephone' => $request->telephone,
           'montant' => $request->montant,
           'num_facture' => $request->input('num_facture', ''),
            'num_compteur' => $request->input('num_compteur', ''),
        ]);

        if ($data){
            return redirect('/')->with('success', 'Paiement effectué avec succès')
                                    ->with('show_modal', true);
          } else {
            return redirect('/')->with('fail', 'Une erreur est survenue');
          }



    }
}
