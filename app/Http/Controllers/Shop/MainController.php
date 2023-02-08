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
}
