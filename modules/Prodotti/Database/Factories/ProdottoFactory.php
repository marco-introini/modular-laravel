<?php

namespace Modules\Prodotti\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Modules\Prodotti\Models\Prodotto;

class ProdottoFactory extends Factory
{
    protected $model = Prodotto::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),
            'descrizione' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
