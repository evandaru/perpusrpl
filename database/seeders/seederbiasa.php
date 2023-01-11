<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class seederbiasa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->insert([
            [
                'nama' => 'ahmad',
                'jenis_kelamin' => 'pria',
                'email' => 'ahmad@gmail.com',
                'password' => Hash::make('ahmad'),
            ],
            [
                'nama' => 'lia',
                'jenis_kelamin' => 'wanita',
                'email' => 'lia@gmail.com',
                'password' => Hash::make('lia'),
            ],
            [
                'nama' => 'admin',
                'jenis_kelamin' => 'pria',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ]
        ]);
        DB::table('bukus')->insert([[
            'nama_buku' => 'Filosofi Teras',
            'gambar_buku' => '1',
            'penerbit_buku' => 'Peneerbit Buku Kompas',
            'pengarang_buku' => 'Henry Manampiring',
            'isbn' => ' 978-6-02412-518-9',
        ], [
            'nama_buku' => 'Laut Bercerita',
            'gambar_buku' => '2',
            'penerbit_buku' => 'KPG (Kepustakaan Populer Gramedia)',
            'pengarang_buku' => 'Leila S. Chudori',
            'isbn' => ' 978-602-424-694-5',
        ], [
            'nama_buku' => 'Sapiens: Pilar-pilar Peradaban (Grafis vol. 2)',
            'gambar_buku' => '3',
            'penerbit_buku' => 'KPG (Kepustakaan Populer Gramedia)',
            'pengarang_buku' => 'Yual Noah Harari',
            'isbn' => ' 978-602-481-755-8',
        ], [
            'nama_buku' => 'Merawat Luka Batin',
            'gambar_buku' => '4',
            'penerbit_buku' => 'Peneerbit Gramedia Pustaka Utama, Jakarta',
            'pengarang_buku' => 'dr. Jiemi Ardian, Sp.KJ',
            'isbn' => ' 978-602-06-6152-0',
        ], [
            'nama_buku' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'gambar_buku' => '5',
            'penerbit_buku' => 'Grasindo',
            'pengarang_buku' => 'Mark Manson',
            'isbn' => ' 978-602-452-698-6',
        ], [
            'nama_buku' => 'Buya Hamka Berbicara tentang Perempuan',
            'gambar_buku' => '6',
            'penerbit_buku' => 'GEMA INSANI',
            'pengarang_buku' => 'Buya Hamka',
            'isbn' => ' 978-602-250-236-4',
        ], [
            'nama_buku' => ' Logika Pemrograman Menggunakan C++',
            'gambar_buku' => '7',
            'penerbit_buku' => 'Elex Media Komputindo',
            'pengarang_buku' => 'Abdul Kadir',
            'isbn' => ' 978-623-000-157-4',
        ], [
            'nama_buku' => 'Studi Islam 1: Kajian Islam Kontemporer',
            'gambar_buku' => '8',
            'penerbit_buku' => 'Rajagrafindo',
            'pengarang_buku' => 'Hasani Ahmad Said',
            'isbn' => ' 978-979-769-995-6',
        ], [
            'nama_buku' => 'Hujan Bulan Juni: Sepilihan Sajak',
            'gambar_buku' => '9',
            'penerbit_buku' => 'Gramedia Pustaka Utama',
            'pengarang_buku' => 'Sapardi Djoko Damono',
            'isbn' => ' 978-979-229-706-5',
        ], [
            'nama_buku' => 'Illuminati Nusantara',
            'gambar_buku' => '10',
            'penerbit_buku' => 'Phoniex',
            'pengarang_buku' => 'Ahmad Yanuana Samantho',
            'isbn' => ' 100-301-594',
        ], [
            'nama_buku' => 'Psikologi Kepribadian',
            'gambar_buku' => '11',
            'penerbit_buku' => 'Pt Rajagrafindo Persada',
            'pengarang_buku' => 'Sumadi Surya Brata',
            'isbn' => ' 978-979-421-044-4',
        ], [
            'nama_buku' => 'Pramoedya Ananta Toer : Politik & Sastra',
            'gambar_buku' => '12',
            'penerbit_buku' => 'Media Presindo',
            'pengarang_buku' => 'Anandito Reza Bangsawan',
            'isbn' => ' 978-979-911-597-3',
        ]]);
    }
}
