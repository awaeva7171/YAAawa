<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryZone;

class DeliveryZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zones = [
            ['name'=>'Castors','fee'=>'500'],
            ['name'=>'Liberté 6','fee'=>'1000'],
            ['name'=>'Grand-Yoff','fee'=>'1000'],
            ['name'=>'Ouakam','fee'=>'2000'],
            ['name'=>'Parcelles Assainies','fee'=>'1500']
        ];
        foreach($zones as $zone){
            DeliveryZone::create($zone);
        }
    }
}



