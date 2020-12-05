<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     protected $table = 'service';    // le nom de la table dans la bdd
    protected $fillable = [
		'salle_musc', 'cardio', 'autre', 'image_musc', 'image_cardio', 'image_autre',       // les parametres de la table
    ];
}
