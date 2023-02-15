<?php

namespace Database\Seeders;

use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    public function run()
    {
            Thread::factory()->count(500)->create();
    }
}
