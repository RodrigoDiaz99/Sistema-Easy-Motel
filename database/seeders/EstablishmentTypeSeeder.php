<?php

namespace Database\Seeders;

use App\Models\EstablishmentType;
use Illuminate\Database\Seeder;

class EstablishmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstablishmentType::create([
            'name' => 'Hotel',
            'user_created_at' => 1
        ]);

        EstablishmentType::create([
            'name' => 'Motel',
            'user_created_at' => 1
        ]);
    }
}
