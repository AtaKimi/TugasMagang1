<?php

namespace Database\Seeders;

use App\Models\LinkMateri;
use Illuminate\Database\Seeder;

class LinkMateriSeeder extends Seeder
{
    // Run the database seeds
    public function run()
    {
        LinkMateri::factory()->count(10)->create();
    }
}
