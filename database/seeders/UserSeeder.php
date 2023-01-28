<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        collect([
            [
                'name' => 'Admin',
                'telepon' => '083112907503',
                'email' => 'admin@pengaduan.com',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'level' => 'admin',
                'status' => 'aktif',
            ],
            [
                'name' => 'Petugas',
                'telepon' => '083112907569',
                'email' => 'petugas@pengaduan.com',
                'username' => 'petugas',
                'password' => bcrypt('petugas'),
                'level' => 'petugas',
                'status' => 'aktif',
            ],
            [
                'name' => 'Masyarakat 1',
                'telepon' => '085315755352',
                'email' => 'masyarakat1@pengaduan.com',
                'username' => 'masyarakat1',
                'password' => bcrypt('masyarakat1'),
                'level' => 'masyarakat',
                'status' => 'aktif',
            ],
            [
                'name' => 'Masyarakat 2',
                'telepon' => '085315755353',
                'email' => 'masyarakat2@pengaduan.com',
                'username' => 'masyarakat2',
                'password' => bcrypt('masyarakat2'),
                'level' => 'masyarakat',
                'status' => 'aktif',
            ],
        ])->each(function($user) {
            User::create($user);
        });

    }
}
