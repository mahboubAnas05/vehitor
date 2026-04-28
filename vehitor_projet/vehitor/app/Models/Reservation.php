<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $table = 'reservations';

    protected $primaryKey = 'id';

    protected $fillable = [
        'date_debut',
        'date_fin',
        'statut',
        'nombre_jours',
        'user_id',
        'vehicule_id'
    ];

    // relation avec client
    public function client(){
        return $this->belongsTo(User::class);
    }

    // relation avec la table vehicule
    public function vehicules(){
        return $this->hasMany(Vehicule::class);
    }

    // relation avec la table facture
    public function facture(){
        return $this->hasOne(Facture::class);
    }
}
