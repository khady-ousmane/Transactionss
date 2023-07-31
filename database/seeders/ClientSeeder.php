<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'nom' => 'Basse',
            'prenom' => 'Berthe',
            'telephone' => '0612345678',
        ]);

        Client::create([
            'nom' => 'Ndiaye',
            'prenom' => 'fatou',
            'telephone' => '0712345678',
        ]);


        Client::create([
            'nom' => 'Mendy',
            'prenom' => 'Sylvestre',
            'telephone' => '0712345678',
        ]);

        Client::create([
            'nom' => 'Sagna',
            'prenom' => 'Gwenaelle',
            'telephone' => '0712345678',
        ]);

        Client::create([
            'nom' => 'Basse',
            'prenom' => 'Berthe',
            'telephone' => '0712345678',
        ]);

        Client::create([
            'nom' => 'Dieng',
            'prenom' => 'Khady',
            'telephone' => '0712345678',
        ]);

        Client::create([
            'nom' => 'Diop',
            'prenom' => 'Indo',
            'telephone' => '0712345678',
        ]);

        // Ajoutez d'autres enregistrements de clients ici
    }
}