<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Rak;
use App\Models\Anggota;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota" => "123456789",
            "nama_anggota" => "Inumaki",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "081223458376",
            "alamat_anggota" => "Tokyo",
        ]);

        Anggota::create([
            "kode_anggota" => "123456720",
            "nama_anggota" => "Sugoru",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "081297458376",
            "alamat_anggota" => "Myanmar",
        ]);

        Petugas::create([
            "nama_petugas" => "Gojo",
            "jabatan_petugas" => "Kepala Perpus",
            "no_telp_petugas" => "0812547658376",
            "alamat_petugas" => "Tokyo",
        ]);

        Petugas::create([
            "nama_petugas" => "satoru",
            "jabatan_petugas" => "Operator",
            "no_telp_petugas" => "0812547889376",
            "alamat_petugas" => "Tokyo",
        ]);

        Buku::create([
            "kode_buku" => "12345",
            "judul_buku" => "Laut",
            "penulis_buku" => "Gojo",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2022",
            "stok" => 30,
        ]);

        Buku::create([
            "kode_buku" => "12985",
            "judul_buku" => "Bintang",
            "penulis_buku" => "Satoru",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2010",
            "stok" => 32,
        ]);

        Rak::create([
            "nama_rak" => "Sains",
            "lokasi_rak" => "lt-2",
            "buku_id" => 1,
        ]);

        Rak::create([
            "nama_rak" => "Math",
            "lokasi_rak" => "lt-3",
            "buku_id" => 2,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-02",
            "tanggal_kembali" => "2023-10-08",
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-03",
            "tanggal_kembali" => "2023-10-10",
            "buku_id" => 2,
            "anggota_id" => 2,
            "petugas_id" => 2,
        ]);

        Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-08",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-10",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2,
        ]);

    }
}
