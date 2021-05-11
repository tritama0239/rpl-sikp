<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'name' => 'koordinator',
            'email' => 'koordinator@gmail.com',
            'level' => 'koordinator',
            'password' => bcrypt('koordinator123')
        ],
        [
            'name' => 'dosen',
            'email' => 'dosen@staff.ukdw.ac.id',
            'level' => 'dosen',
            'password' => bcrypt('dosen123')
        ],
        [
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@si.ukdw.ac.id',
            'level' => 'mahasiswa',
            'password' => bcrypt('mahasiswa123')
        ]
    ];
    foreach ($user as $key => $value) {
        User::create($value);
    }
    }
}
