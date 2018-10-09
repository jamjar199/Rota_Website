<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seeds the database with room names.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert(['room_name' => 'Holcombe']);
        DB::table('room')->insert(['room_name' => 'Firwood']);
		DB::table('room')->insert(['room_name' => 'Penny Farthing']);
        DB::table('room')->insert(['room_name' => 'Exhibition']);
        DB::table('room')->insert(['room_name' => 'Harmony']);
        DB::table('room')->insert(['room_name' => 'Conf Centre']);
    }
}
