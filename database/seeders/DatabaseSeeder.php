<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;


class DatabaseSeeder extends Seeder
{


    public function run(): void
    {
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,

        // ]);
        User::factory(20)->create();
    }
}
