<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $table = 'factures';

    protected $primaryKey = 'id';

    protected $fillable = [
        'date_facture',
        'montant_total',
        'reservation_id'
    ];


    // relation avec reservation
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
