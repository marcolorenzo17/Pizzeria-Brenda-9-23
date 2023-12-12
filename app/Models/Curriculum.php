<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'curriculum',
        'nuevo',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
