<?php

namespace Database\Factories;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'isi_materi' => $this->faker->paragraph(),
        ];
    }
}
