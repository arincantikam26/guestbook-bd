<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Laura',
            'email' => 'laura@gmail.com',
            'telephone' => '081111111',
            'detail' => 'Belajar bersama',
            'status' => 'new',
            'room_id' => 1
        ];
        Guest::insert($data);
    }
}
