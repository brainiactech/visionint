<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        DB::table('users')->insert([
            'name' => 'Thinksihfts',
            'email' => 'thinkshifts@gmail.com',
            'password' => bcrypt('Thinkshifts2020'),
            'role_id' => App\UserRole::$ADMINISTRATOR
        ]);
        
    }
}
