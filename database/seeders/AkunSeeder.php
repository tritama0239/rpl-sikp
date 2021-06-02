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
            'email' => 'andhika@gmail.com',
            'level' => 'koordinator',
            'password' => bcrypt('Andhika1234')
        ],
        [
            'name' => 'Argo',
            'email' => 'argo@staff.ukdw.ac.id',
            'level' => 'dosen',
            'password' => bcrypt('argo1234')
        ],
        [
            'name' => 'Riswan',
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
