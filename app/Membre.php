<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membre extends Model
{

    protected $table = 'membre';
    protected $fillable = ['name', 'num_tlfn', 'nbr_moi', 'montant', 'id_user'];
	    
}
