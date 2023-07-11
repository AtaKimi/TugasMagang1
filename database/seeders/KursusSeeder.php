<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kursus;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus semua data yang ada di tabel kursus
        Kursus::truncate();

        // Mengisi tabel kursus dengan 10 data palsu yang dihasilkan oleh factory
        Kursus::factory()->count(10)->create();
    }
}