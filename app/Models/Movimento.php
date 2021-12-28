<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;

    protected $fillable = [
        "data",
        "tipo",
        "quantidade",
        "vl_unit",
        "produto_id",
    ];

    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
