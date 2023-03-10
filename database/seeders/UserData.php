<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
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
                'name' => 'Bendahara',
                'password' => bcrypt('123456'),
                'email' => 'bendahara@kopassalam.com'
            ],

            [
                'name' => 'Ketua',
                'password' => bcrypt('123456'),
                'email' => 'ketua@kopassalam.com'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
       
        //
    }
}
