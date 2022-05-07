<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Grade::factory(30)->create();
        User::factory(1)->create(['name'=>'Damaris', 'password'=>'password', 'email'=>'damaris@gmail.com']);
    }
}
