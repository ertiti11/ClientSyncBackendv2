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
        user::factory(10)->create();
        // añadir de manera manual un seeder de clientes y trabajos sin el metodo factory

        user::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);


        Client::create([
            'name' => 'Juan',
            'lastNames' => 'Perez',
            'email' => 'juan@gmail.com',
            'phone' => '1234567890',
            'date' => '2022-02-02',
            'address' => 'Calle 123',
            'color' => 'red'
        ]);

        Work::create([
            'title' => 'Trabajo 1',
            'description' => 'Descripcion del trabajo 1',
            'client_id' => 1,
            'start_date' => '2022-02-02',
            'end_date' => '2022-02-02',
            'price' => 100.00,
            'status' => 'pending'
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
