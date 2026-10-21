<?php

namespace Database\Factories;

use App\Models\Kegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kegiatan>
 */
class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_kegiatan' => fake()->unique()->bothify('KG##'),
            'nama_kegiatan' => fake()->unique()->words(3, true),
            'kategori' => fake()->randomElement(['Perlombaan', 'Upacara', 'Olahraga']),
            'tanggal' => fake()->date(),
            'lokasi' => fake()->words(2, true),
            'penanggung_jawab' => fake()->name(),
            'keterangan' => fake()->sentence(8)
             ];
    }
}
