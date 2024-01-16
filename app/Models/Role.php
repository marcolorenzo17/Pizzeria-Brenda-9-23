<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'privilegios',
        'primero'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
