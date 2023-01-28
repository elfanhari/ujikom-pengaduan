<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create([
            'user_id' => '3',
            'tanggal' => '2023-01-05',
            'isilaporan' => 'Di padaemut, ada yang buang sampah sembarangan',
            'foto' => 'fwnedninr83ye17ehdh47djn3f8h4rdb4r82hr42583hf',
            'status' => 'proses',
        ]);
        Pengaduan::create([
            'user_id' => '4',
            'tanggal' => '2023-01-06',
            'isilaporan' => 'Di padaemut, ada yang mabok bareng ramean pokoke',
            'foto' => 'fwnedninr83ye17defedh47djn3f8h4rdb4r82hr42583hf',
            'status' => 'selesai',
        ]);
    }
}
