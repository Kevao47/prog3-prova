<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Automovel extends Model
{
    use HasFactory;

    protected $table = 'automoveis';

    protected $fillable = [
        'nome',
        'descricao',
        'combustivel',
        'ano',
        'preco',
        'foto'
    ];

    // Aqui eu uso mutator pra botar a url certa
    public function getFotoAttribute(){
        return asset('img/' . $this->attributes['foto']);
    }


}
