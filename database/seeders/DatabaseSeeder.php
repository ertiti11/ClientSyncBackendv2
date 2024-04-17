<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Client;
use App\Models\Work;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // user::factory(10)->create();
        // // añadir de manera manual un seeder de clientes y trabajos sin el metodo factory

        // user::create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('admin')
        // ]);
            // Client::create([
            //     'name' => 'pepe',
            //     'lastNames' => 'pepe',
            //     'email' => 'pepe@gmail.com',
            //     'phone' => '122343456789',
            //     'date' => '2021-10-10',
            //     'address' => 'calle falsa 123',
            //     'color' => 'red'
            // ]);

            



        // crealo con faker y factory

        // Client::factory(10)->create();
        Work::factory(10)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

