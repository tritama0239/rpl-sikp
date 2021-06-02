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
            'name' => 'Andhika',
            'nim' => '00000001',
            'email' => 'andhika@gmail.com',
            'level' => 'koordinator',
            'password' => bcrypt('andhika1234')
        ],
        [
            'name' => 'Argo',
            'nim' => '11110001',
            'email' => 'argo@staff.ukdw.ac.id',
            'level' => 'dosen',
            'password' => bcrypt('argo1234')
        ],
        [
            'name' => 'Riswan',
            'nim' => '72180239',
            'email' => 'riswan.sulia@si.ukdw.ac.id',
            'level' => 'mahasiswa',
            'password' => bcrypt('Tritama9719')
        ]
    ];
    foreach ($user as $key => $value) {
        User::create($value);
    }
    }
}
