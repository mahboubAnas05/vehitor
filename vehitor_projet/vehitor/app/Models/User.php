<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // laison avec reservations
    public function reservations(){
        return $this->hasMany(Reservation::class, 'user_id');
    }

    // relation des clients avec leurs voitures
    public function clientVehicules(){
        return $this->hasManyThrough(Vehicule::class, Reservation::class, 'user_id', 'id', 'id', 'vehicule_id');
    }

    // relation des agences avec leurs voitures
    public function AgenceVehicules(){
        return $this->hasMany(Vehicule::class, 'vehicule_id');
    }

    // relation des client avec la facture
    public function facture(){
        return $this->hasManyThrough(Facture::class, Reservation::class);
    }

}
