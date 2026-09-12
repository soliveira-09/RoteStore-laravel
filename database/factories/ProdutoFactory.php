<?php

namespace Database\Factories;

use Illuminate\Support\Str;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Categoria;
use App\Models\User;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug'=> Str::slug($nome),
            // O [via.placeholder.com] caiu, tem que usar o picsum/unsplash
            'imagem' => 'https://picsum.photos/400/400?random=' . $this->faker->unique()->numberBetween(1, 1000),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),
        ];
    }
}
