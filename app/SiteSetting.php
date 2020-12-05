<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
     protected $table = 'sitesetting';    // le nom de la table dans la bdd
    protected $fillable = [
		'site_name', 'slegon', 'email', 'adress', 'num_tlfn', 'page_fb', 'A', 'B', 'C','qui_somme_nous',       // les parametres de la table
    ];
}
