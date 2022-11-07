<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre = $this->faker->unique()->word(15);
        return [
            'name' => $nombre,
            'slug' => Str::slug($nombre),
            'proveedor' => $this->faker->word(15),
            'codigo' => $this->faker->random(),
            'foto' => $this->faker->randomElement(['http://localhost/img/image1.jpg',
            'http://localhost/img/image2.jpg','http://localhost/img/image3.jpg']),
            'filtro' => $this->faker->word(15),
            'marca' => $this->faker->word(15),
            'category_id' => Category::all()->random()->id

        ];
    }
}
