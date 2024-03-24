<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [[
            'name' => 'title1',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'image' => 'imghero.jpg',
            'kouta' => 50,
            'available_date' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'title2',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'image' => 'imghero2.jpg',
            'kouta' => 10,
            'available_date' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => 'title3',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'image' => 'imghero.jpg',
            'kouta' => 30,
            'available_date' => date('Y-m-d H:i:s'),
        ]];
        Room::insert($data);
    }
}
