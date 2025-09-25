<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    //public $timestamps = false;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'dateNaissance',
        'courriel',
        'ville_id'
    ];

    
    public function ville() {
        return $this->belongsTo(Ville::class);
    }

}
