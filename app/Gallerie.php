<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
     protected $table = 'gallerie';    // le nom de la table dans la bdd
    protected $fillable = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8', 'image9','image10', 'image11','image12',     // les parametres de la table
    ];
}
