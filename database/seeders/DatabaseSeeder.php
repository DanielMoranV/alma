<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Daniel Moran Vilchez',
            'dni' => '70315050',
            'password' => Hash::make('admin3264'),
            'is_active' => true,
            'avatar' => 'avatar.png',
            'phone' => '+56 9876543210',
            'address' => 'Calle 123, 123 Barrio, Ciudad, Estado',
            'company_id' => null,
            'email_verified_at' => now(),
            'email' => 'daniel.moranv94@gmail.com',
        ]);

        $units = [
            'Kilogramo' => 'KG',
            'Litro' => 'L',
            'Metro' => 'M',
            'Centimetro' => 'CM',
            'Milimetro' => 'MI',
            'Caja' => 'C',
            'Unidad' => 'UND',
            'Sobre' => 'SOBRE',
            'Botella' => 'B',
            'Cuarto' => 'Q',
            'Galon' => 'G',
            'Millar' => 'ML',
            'Docena' => 'DOC',
            'Par' => 'PAR',
        ];

        foreach ($units as $name => $symbol) {
            Unit::create([
                'name' => $name,
                'symbol' => $symbol,
            ]);
        }
    }
}
