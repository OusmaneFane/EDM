<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Models\Cercle;
use App\Models\Region;
use App\Models\Village;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('/dashboard.index');
    }

    public function pays(){
        return view('/dashboard.pays');
    }

    public function store_pays(Request $request){
        // insert into pays
        $request->validate([
            'name' => 'required',
            'capital' => 'required'
        ]);
        $data = Pay::create([
            'name' => $request->name,
            'capital' => $request->capital
        ]);
        if ($data){
            return redirect()->route('pays')->with('success', 'Pays ajouté avec succès');
        }else  {
            return redirect()->route('pays')->with('fail', 'Une erreur est survenue');
        }


    }

    public function cercle(){
        $pays = Pay::all();
        return view('/dashboard.cercle', ['pays'=>$pays]);
    }

    public function store_cercle(Request $request){
        // insert into pays
        $request->validate([
            'nom_cercle' => 'required',
            'pay_id' => 'required'
        ]);

        $data = Cercle::create([
            'nom_cercle' => $request->nom_cercle,
            'pay_id' => $request->pay_id
        ]);
        if ($data){
            return redirect()->route('cercle')->with('success', 'Cercle ajouté avec succès');
        }else  {
            return redirect()->route('cercle')->with('fail', 'Une erreur est survenue');
        }

    }

    public function region(){
        $cercles = Cercle::all();
        return view('/dashboard.region', ['cercles'=>$cercles]);
    }
    public function  store_region(Request $request){
        // insert into pays
        $request->validate([
            'nom_region' => 'required',
            'cercle_id' => 'required'
        ]);
        $data = Region::create([
            'nom_region' => $request->nom_region,
            'cercle_id' => $request->cercle_id
        ]);
        if ($data){
            return redirect()->route('region')->with('success', 'Région ajoutée avec succès');
        }else  {
            return redirect()->route('region')->with('fail', 'Une erreur est survenue');
        }

    }
    public function village(){
        $regions = Region::all();
        return view('/dashboard.village', ['regions'=>$regions]);

    }

    public function store_village(Request $request){
        // insert into pays
        $request->validate([
            'nom_village' => 'required',
            'region_id' => 'required'
        ]);
        $data = Village::create([
            'nom_village' => $request->nom_village,
            'region_id' => $request->region_id
        ]);
        if ($data){
            return redirect()->route('village')->with('success', 'Village ajouté avec succès');
        }else  {
            return redirect()->route('village')->with('fail', 'Une erreur est survenue');
        }
    }
}
