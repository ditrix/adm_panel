<?php

namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;
    use Illuminate\Hashing;
    use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                [
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'admin@mail.com',
                    'password' =>  Hash::make('password'),
                ],
                [
                    'id' => 2,
                    'name' => 'user',
                    'email' => 'u@u.com',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 3,
                    'name' => 'sasha',
                    'email' => 'admin@admin.com8',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 4,
                    'name' => 'masha',
                    'email' => 'admin@admin.com9',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 5,
                    'name' => 'pasha',
                    'email' => 'admin@admin.com10',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 6,
                    'name' => 'misha',
                    'email' => 'admin@admin.com11',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 7,
                    'name' => 'dasha',
                    'email' => 'admin@admin.com12',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 8,
                    'name' => 'olia',
                    'email' => 'admin@admin.com13',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 9,
                    'name' => 'kolia',
                    'email' => 'admin@admin.com14',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 10,
                    'name' => 'oleg',
                    'email' => 'admin@admin.com15',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 11,
                    'name' => 'ira',
                    'email' => 'admin@admin.com16',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 12,
                    'name' => 'nastia',
                    'email' => 'admin@admin.com17',
                    'password' => Hash::make('password'),
                ],
            ];
            DB::table('users')->insert($data);
        }

    }
