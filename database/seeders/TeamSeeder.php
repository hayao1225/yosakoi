<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => '室蘭百花繚乱',
            'user_id' => 1,
            'image_url' => 'https',
            'prefecture_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
