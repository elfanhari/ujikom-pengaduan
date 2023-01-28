<?php

namespace Database\Seeders;

use App\Models\Tanggapan;
use Illuminate\Database\Seeder;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tanggapan::create([
            'pengaduan_id' => '1', 
            'user_id' => '1', 
            'tanggal' => '2023-01-05', 
            'tanggapan' => 'Oke, orangnya sudah ditangkap, selesai cuy', 
        ]);

        Tanggapan::create([
            'pengaduan_id' => '2', 
            'user_id' => '2', 
            'tanggal' => '2023-01-05', 
            'tanggapan' => 'Aduh, pencarian orang tersebut masih dilakukan, diproses cuy', 
        ]);
    }
}
