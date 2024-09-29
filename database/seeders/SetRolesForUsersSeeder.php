<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\DB;

class SetRolesForUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach($users as $user)
        {
            DB::table('user_roles')->insert(
                [
                    'user_id' => $user->id,
                    'role_id' => ($user->id == 1)? 3 : rand(1,3)
                ]
            );
        }
    }
}
