<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\Property::factory(10)->create();
        // \App\Models\Photo::factory(20)->create();
        // \App\Models\User::factory(1)->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com.br',
        //     'is_admin' => 1,
        // ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Denize',
            'email' => 'denize.f.bassi@gmail.com',
            'is_admin' => 1,
        ]);
    }
}
