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

        $akbar = User::create([
            'first_name'        => 'اکبر',
            'last_name'         => 'احمدی سرای',
            'email'             => 'akbarsafari00@gmail.com',
            'password'          => Hash::make('Aa@13567975'),
            'email_verified_at' => now(),
            'editable' => false,
            'api_token'         => Hash::make('Aa@13567975'),
        ]);

        $dummyInfo = [
            'company'  => 'hania',
            'phone'    => '989371770774',
            'website'  => 'http://hania-developer.ir',
            'language' => "fa",
            'country'  => "IR",
        ];

        $info = new UserInfo() ;

        foreach ($dummyInfo as $key => $value) {
            $info->$key = $value;
        }

        $akbar->assignRole('admin');

        $info->user()->associate($akbar);
        $info->save();

    }


}
