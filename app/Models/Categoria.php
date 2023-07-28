<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria', 'status'];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_categoria');
    }
    use HasFactory;
}
 