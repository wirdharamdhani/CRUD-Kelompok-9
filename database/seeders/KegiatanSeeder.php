<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG01','nama_kegiatan'=>'Upacara Bendera','kategori'=>'Upacara',
        'tanggal'=>'2025-08-18','lokasi'=>'Lapangan Sekolah','penanggung_jawab'=>'Pak Budi','keterangan'=>'Upacara Senin']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG02','nama_kegiatan'=>'Lomba 17 Agustusan','kategori'=>'Perlombaan',
        'tanggal'=>'2025-08-17','lokasi'=>'Lapangan','penanggung_jawab'=>'Bu Siti','keterangan'=>'HUT RI']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG03','nama_kegiatan'=>'seminar karir','kategori'=>'Pendidikan',
        'tanggal'=>'2026-11-12','lokasi'=>'Aula Sekolah','penanggung_jawab'=>'Guru BK','keterangan'=>'Pengenalan dunia kerja']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG04','nama_kegiatan'=>'Lomba Kebersihan Kelas','kategori'=>'Perlombaan',
        'tanggal'=>'2026-11-02','lokasi'=>'Lapangan','penanggung_jawab'=>'Wali Kelas','keterangan'=>'Lomba Kebersihan antarkelas']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG05','nama_kegiatan'=>'Peringatan Hari Guru','kategori'=>'Peringatan',
        'tanggal'=>'2026-11-25','lokasi'=>'Lapangan Sekolah','penanggung_jawab'=>'OSIS','keterangan'=>'Apresiasi Kepada Guru']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG06','nama_kegiatan'=>'Class Meeting','kategori'=>'Sosial',
        'tanggal'=>'2026-12-14','lokasi'=>'Lapang Sekolah','penanggung_jawab'=>'OSIS','keterangan'=>'Perlombaan antar kelas']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG07','nama_kegiatan'=>'Kegiatan Literasi','kategori'=>'Pendidikan',
        'tanggal'=>'2026-11-06','lokasi'=>'Perpustakaan','penanggung_jawab'=>'Guru Bahasa Indonesia','keterangan'=>'Meningkatkan minat baca siswa']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG08','nama_kegiatan'=>'Pesantren Kilat','kategori'=>'Keagamaan',
        'tanggal'=>'2026-03-10','lokasi'=>'Musala Sekolah','penanggung_jawab'=>'Guru Agama','keterangan'=>'Kegiatan keagamaan siswa']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG09','nama_kegiatan'=>'Peringatan Hari Kartini','kategori'=>'Peringatan',
        'tanggal'=>'2026-04-21','lokasi'=>'Aula Sekolah','penanggung_jawab'=>'OSIS','keterangan'=>'Lomba busana dan kreativ']);
        
        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG10','nama_kegiatan'=>'Turnamen Futsal','kategori'=>'Olahraga',
        'tanggal'=>'2026-11-18','lokasi'=>'Lapangan Futsal','penanggung_jawab'=>'Guru Olahraga','keterangan'=>'Pertandingan antarkelas']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG11','nama_kegiatan'=>'Kunjungan Indrustri','kategori'=>'Pendidikan',
        'tanggal'=>'2026-12-08','lokasi'=>'Kawasan Indrusri','penanggung_jawab'=>'Ketua Program Keahlian','keterangan'=>'Mengenal Dunia Indrustri']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG12','nama_kegiatan'=>'Donasi Bencana','kategori'=>'Sosial',
        'tanggal'=>'2026-11-30','lokasi'=>'Ruang Osis','penanggung_jawab'=>'Pengurus Osis','keterangan'=>'Pengumpulan Bantuan']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG13','nama_kegiatan'=>'Pameran Karya Siswa','kategori'=>'Kreativitas',
        'tanggal'=>'2026-12-10','lokasi'=>'Aula Sekolah','penanggung_jawab'=>'Guru Produktif','keterangan'=>'Menampilkan Hasil Karya Siswa']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG14','nama_kegiatan'=>'Senam Sehat','kategori'=>'Olahraga',
        'tanggal'=>'2026-11-13','lokasi'=>'Lapangan Sekolah','penanggung_jawab'=>'Guru PJOK ','keterangan'=>'Menjaga Kebugaran Tubuh']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG15','nama_kegiatan'=>'Donor Darah','kategori'=>'Kesehatan',
        'tanggal'=>'2026-10-02','lokasi'=>'UKS Sekolah','penanggung_jawab'=>'Tim Kesehatan','keterangan'=>'Kegiatan Donor Darah Bersama PMI']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG16','nama_kegiatan'=>'Gerakan Menanam Pohon','kategori'=>'Lingkungan',
        'tanggal'=>'2026-11-24','lokasi'=>'Taman Sekolah','penanggung_jawab'=>'Tim Adiwiyata','keterangan'=>'Menjaga Kelestarian Lingkungan']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG17','nama_kegiatan'=>'Lomba Paduan Suara','kategori'=>'Perlombaan',
        'tanggal'=>'2026-08-13','lokasi'=>'Aula Sekolah','penanggung_jawab'=>'Ekstrakurikuler Musik','keterangan'=>'Mengembangkan Kemapampuan Bernyanyi']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG18','nama_kegiatan'=>'Kegiatan Berbagi Takjil','kategori'=>'Keagamaan',
        'tanggal'=>'2026-10-18','lokasi'=>'Gerbang Sekolah','penanggung_jawab'=>'Seksi Keagamaan','keterangan'=>'Berbagi Takjil Kepada Masyarakat']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG19','nama_kegiatan'=>'Turnamen Badminton','kategori'=>'Olahraga',
        'tanggal'=>'2026-09-27','lokasi'=>'Gedung Olahraga','penanggung_jawab'=>'Panitia Olahraga','keterangan'=>'Pertandingan Badminton Antar Kelas']);

        \App\Models\Kegiatan::create(['kode_kegiatan'=>'KG20','nama_kegiatan'=>'Lomba Menghiah Kelas','kategori'=>'Perlombaan',
        'tanggal'=>'2026-03-20','lokasi'=>'Ruang Kelas','penanggung_jawab'=>'Panitia Kelas','keterangan'=>'Meningkatkan Kreativitas & Kekompakanj']);  
    }
}
