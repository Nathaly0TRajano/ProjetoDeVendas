<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'user_id' // relacionamento entre a tabela usuário com a admin
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
}
