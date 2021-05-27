<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $guarded = [];

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    public function getStatutAttribute($attributes)
    {
        return [
            '0'=>'Inactif',
            '1'=>'Actif',
            '2'=>'En attente'
        ][$attributes];
    }
}
