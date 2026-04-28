<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    //
    
    protected $table = 'vehicules';

    protected $primaryKey = 'id';

    protected $fillable = [
        'marque',
        'modele',
        'annee',
        'matricule',
        'categorie',
        'couleur',
        'etat',
        'prix_par_jour',
        'disponibilite',
        'photo',
        'user_id'
    ];

    // relation avec reservation
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    // relation avec agence
    public function agence(){
        return $this->belongsTo(User::class);
    }

}
