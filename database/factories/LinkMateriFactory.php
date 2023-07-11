<?php

namespace Database\Factories;

use App\Models\LinkMateri;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkMateriFactory extends Factory
{
    // The name of the model that this factory is for
    protected $model = LinkMateri::class;

    // Define the default state of the model
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(),
            'link' => $this->faker->url(),
        ];
    }
}
