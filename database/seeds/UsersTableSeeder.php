<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            'cost' => 11
        ];
        $p = password_hash('sixphere', PASSWORD_BCRYPT, $options);

        DB::table('users')->insert([
            'username' => 'sixphere',
            'email' => 'info@sixphere.com',
            'password' => $p,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
