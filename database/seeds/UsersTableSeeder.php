<?php

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
        $users = [
            [
                'name'          => 'adminsembapur',
                'username'      => 'admin123',
                'email'         => 'admin@sembapur.com',
                'password'      => bcrypt('ww11ee22'),
                'gender'        => 'pria',
                'tanggal_lahir' => '1993-10-02 00:00:00', 
                'no_hp'         => 1234123412,
                'ktp'           => 123456789,
                'kota'          => 'Jakarta',
                'alamat'        => 'District 8',
                'cash'          => 100000,
                'role'          => 'admin',
                'avatar'        => 'backend/images/user-icon.png',
                'active'        => true
            ],
            [
                'name'          => 'authorsembapur',
                'username'      => 'author123',
                'email'         => 'author@sembapur.com',
                'password'      => bcrypt('ww11ee22'),
                'gender'        => 'pria',
                'tanggal_lahir' => '1993-10-02 00:00:00', 
                'no_hp'         => 1234123412,
                'ktp'           => 123456789,
                'kota'          => 'Jakarta',
                'alamat'        => 'District 8',
                'cash'          => 100000,
                'role'          => 'author',
                'avatar'        => 'backend/images/user-icon.png',
                'active'        => true
            ],
            [
                'name'          => 'penjualsembapur',
                'username'      => 'penjual123',
                'email'         => 'penjual@sembapur.com',
                'password'      => bcrypt('ww11ee22'),
                'gender'        => 'pria',
                'tanggal_lahir' => '1993-10-02 00:00:00', 
                'no_hp'         => 1234123412,
                'ktp'           => 123456789,
                'kota'          => 'Jakarta',
                'alamat'        => 'District 8',
                'cash'          => 100000,
                'role'          => 'penjual',
                'avatar'        => 'backend/images/user-icon.png',
                'active'        => true
            ],
            [
                'name'          => 'usersembapur',
                'username'      => 'user123',
                'email'         => 'user1@sembapur.com',
                'password'      => bcrypt('ww11ee22'),
                'gender'        => 'pria',
                'tanggal_lahir' => '1993-10-02 00:00:00', 
                'no_hp'         => 1234123412,
                'ktp'           => 123456789,
                'kota'          => 'Jakarta',
                'alamat'        => 'District 8',
                'cash'          => 100000,
                'role'          => 'user',
                'avatar'        => 'backend/images/user-icon.png',
                'active'        => true
            ],
        ];
        DB::table('users')->insert($users);
    }
}
