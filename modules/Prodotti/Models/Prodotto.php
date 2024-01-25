<?php

namespace Modules\Prodotti\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Prodotti\Database\Factories\ProdottoFactory;

class Prodotto extends Model
{
    use HasFactory;

    protected $table = 'prodotti';

    protected static function newFactory(): ProdottoFactory
    {
        return new ProdottoFactory();
    }
}
