<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Star Trek";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Star trek";
        $produit->photo_principale = "startrek.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 39;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt M. Happy";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt qui rend heureux";
        $produit->photo_principale = "happy.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "C'est un T-shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();
    }
}
