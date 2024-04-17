<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


# crea un comando que saque todos los clientes de la base de datos

Artisan::command('clients', function () {
    $clients = \App\Models\Client::all();
    $this->table(['id', 'name', 'lastNames', 'email', 'phone', 'date', 'address', 'color'], $clients);
})->purpose('Display all clients from the database');

# crea un comando que saque todos los trabajos de la base de datos

Artisan::command('jobs', function () {
    $jobs = \App\Models\Work::all();
    $this->table(['id', 'title', 'description', 'client_id', 'start_date', 'end_date', 'price', 'status'], $jobs);
})->purpose('Display all jobs from the database');