<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'personas',
        'tipo',
        'fechahora'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
