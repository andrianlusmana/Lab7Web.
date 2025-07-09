<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Nasional'],
            ['nama_kategori' => 'Internasional'],
            ['nama_kategori' => 'Politik'],
            ['nama_kategori' => 'Ekonomi'],
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Pendidikan'],
            ['nama_kategori' => 'Olahraga'],
            ['nama_kategori' => 'Hiburan'],
            ['nama_kategori' => 'Gaya Hidup'],
            ['nama_kategori' => 'Opini'],
        ];

        // Insert batch
        $this->db->table('kategori')->insertBatch($data);
    }
}
