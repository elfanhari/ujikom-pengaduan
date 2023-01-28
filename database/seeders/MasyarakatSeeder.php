<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            'user_id' => '3',
            'nik' => '3207617437239413',
        ]);

        Masyarakat::create([
            'user_id' => '4',
            'nik' => '3207617437239424',
        ]);
    }
}
