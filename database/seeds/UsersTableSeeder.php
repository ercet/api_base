<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(
            [
                'name' => 'ercet',
                'email' => 'ercet99@gmail.com'
            ]
        );
        factory(User::class)->create(
            [
                'name' => 'eduardo',
                'email' => 'ecasanova99@hotmail.com'
            ]
        );
    }
}
