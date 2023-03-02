<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debiteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_deb',
        'prenom_deb',
        'type_deb',
        'adresse_deb',
        'num_deb',
        'num_compteur',
        'num_facture',
        'date_facture',
        'montant_recouvrer',
    ];
}
