<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User; // Assurez-vous d'importer le modèle User

class EmailController extends Controller
{
    public function index()
    {
        // Récupérer tous les utilisateurs
        $users = User::all();

        // Passer les utilisateurs à la vue
        return view('mail_list', ['users' => $users]);
    }
}
