<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'status' => 'admin', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345678'),
            'status' => 'user', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'TOCHE W',
            'email' => 'TocheC@africa-union.org',
            'password' => bcrypt('2023@Letmein(1)'),
            'status' => 'admin', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'MESHESHA',
            'email' => 'AbrehamM@africa-union.org',
            'password' => bcrypt('2023@Letmein(2)'),
            'status' => 'admin', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'AU-PANVAC',
            'email' => 'aupanvac@africa-union.org',
            'password' => bcrypt('2023@Letmein(3)'),
            'status' => 'admin', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'Bodjo S',
            'email' => 'BodjoC@africa-union.org',
            'password' => bcrypt('Givemeaccess@2023(1)'),
            'status' => 'user', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'Ethel',
            'email' => 'EthelC@africa-union.org',
            'password' => bcrypt('Givemeaccess@2023(2)'),
            'status' => 'user', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'Boukary C',
            'email' => 'BoukaryC@africa-union.org',
            'password' => bcrypt('Givemeaccess@2023(3)'),
            'status' => 'user', // Ajoutez cette ligne
        ]);
        User::create([
            'name' => 'Yordanosse',
            'email' => 'YordanosseL@africa-union.org',
            'password' => bcrypt('Givemeaccess@2023(4)'),
            'status' => 'user', // Ajoutez cette ligne
        ]);

    }
}
