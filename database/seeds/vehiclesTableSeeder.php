<?php

use Illuminate\Database\Seeder;

class vehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'regNum' => 'kt-0586',
            'type' => 'car',
            'manufac' => 'honda',
            'model' => 'lancer',
            'color' => 'red',
            'insPNo' => '145453241234124',
            'insProvider' => 'aliance',
            'driverId'=>'982242665v'
        ]);

        DB::table('vehicles')->insert([
            'regNum' => 'kt-0587',
            'type' => 'van',
            'manufac' => 'honda',
            'model' => 'vivo',
            'color' => 'black',
            'insPNo' => '14545324123',
            'insProvider' => 'aliance',
            'driverId'=>'982242665v'
        ]);
        DB::table('vehicles')->insert([
            'regNum' => 'kt-9587',
            'type' => 'car',
            'manufac' => 'toyota',
            'model' => 'yaris',
            'color' => 'blue',
            'insPNo' => '68465165498',
            'insProvider' => 'selinco',
            'driverId'=>'982242665v'
        ]);
    }
}
