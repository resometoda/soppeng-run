<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    public function run(): void
    {
        Registration::factory(10)->create();
    }
}
