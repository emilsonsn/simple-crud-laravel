<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tasks as Tasks;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = new Tasks();
        $tasks->task = 'Trabalhar na officecom';
        $tasks->data = '2022-05-15 19:49:00';
        $tasks->save();
    }
}

