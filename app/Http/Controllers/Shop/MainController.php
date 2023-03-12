<?php

namespace App\Http\Controllers\Shop;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $produits = Produit::all();
        //dd($produits);
        return view('Shop.index', compact('produits'));

    }

    public function produit(Request $request){
        // echo "Pro";
        // dd($request->id);
        $produit = Produit::find($request->id);
        return view('Shop.produit', compact('produit'));

    }
}
