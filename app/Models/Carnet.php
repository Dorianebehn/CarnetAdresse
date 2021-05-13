<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'ville','adresse','numero'];
    protected $hidden = [
        'created_at', 'updated_at',
        ];
    use HasFactory;
}
