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
                'username' => 'admin1',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'nasabah1',
                'password' => bcrypt('nasabah123')
            ],
            
        ];
        foreach ($user as $key => $value){
            User::create($value);
        } 
    }
}
