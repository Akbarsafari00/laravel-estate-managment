<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {


        $data = config('user.data');
        foreach ($data as $item) {
            $user = User::create([
                'first_name' => $item['first_name'],
                'last_name' => $item['last_name'],
                'email' => $item['email'],
                'password' =>  Hash::make($item['password']),
                'email_verified_at' => $item['email_verified_at'],
                'editable' => $item['editable'],
                'api_token' =>  Hash::make($item['api_token']),
            ]);

            foreach ($item['roles'] as $role) {
                $user->assignRole($role);
            }

            $info = new UserInfo();

            foreach ($item['info'] as $key => $value) {
                $info->$key = $value;
            }

            $info->user()->associate($user);
            $info->save();

        }


    }


}
