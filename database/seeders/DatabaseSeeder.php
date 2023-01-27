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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Default Admin',
            'email' => 'gse@shangrila.gov.un',
            'password' => bcrypt('gse@energy'),
            'role' => 'admin',
        ]);

        \App\Models\Evc::create([
            'evc' => 'XTX2GZAD',
        ]);
        \App\Models\Evc::create([
            'evc' => 'NDA7SY2V',
        ]);
        \App\Models\Evc::create([
            'evc' => 'RVA7DZ2D',
        ]);
        \App\Models\Evc::create([
            'evc' => 'DM8LEESR',
        ]);
    }
}