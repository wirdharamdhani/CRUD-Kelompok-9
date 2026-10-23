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
    'kode_kegiatan' => 'KG' . fake()->unique()->numerify('##'),
    'nama_kegiatan' => fake()->randomElement([
        'Upacara Bendera', 'Lomba 17 Agustusan', 'Lomba Futsal', 'Seminar Kewirausahaan'
    ]),
    'kategori' => fake()->randomElement(['Upacara', 'Perlombaan', 'Olahraga', 'Seminar']),
    'tanggal' => fake()->date(),
    'lokasi' => fake('id_ID')->city(),
    'penanggung_jawab' => fake('id_ID')->name(),
    'keterangan' => fake('id_ID')->sentence(6),
];
    }
}
