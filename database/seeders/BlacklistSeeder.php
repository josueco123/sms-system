<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlackList;

class BlacklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $blackListClient = new BlackList();
        $blackListClient->cedula = "12456398";
        $blackListClient->name = "Juan";
        $blackListClient->first_last_name = "Perez";
        $blackListClient->second_last_name = "Diaz";
        $blackListClient->phone_number = "3214568798";
        $blackListClient->save();

        $blackListClient = new BlackList();
        $blackListClient->cedula = "7845652";
        $blackListClient->name = "Ana";
        $blackListClient->first_last_name = "Salazar";
        $blackListClient->second_last_name = "Garcia";
        $blackListClient->phone_number = "3145564123";
        $blackListClient->save();

        $blackListClient = new BlackList();
        $blackListClient->cedula = "54789635";
        $blackListClient->name = "Lina";
        $blackListClient->first_last_name = "Paz";
        $blackListClient->second_last_name = "Nuñez";
        $blackListClient->phone_number = "3021548857";
        $blackListClient->save();

        $blackListClient = new BlackList();
        $blackListClient->cedula = "78995546";
        $blackListClient->name = "Pablo";
        $blackListClient->first_last_name = "Perez";
        $blackListClient->second_last_name = "Puerta";
        $blackListClient->phone_number = "3061475896";
        $blackListClient->save();

        $blackListClient = new BlackList();
        $blackListClient->cedula = "88566412";
        $blackListClient->name = "Pedro";
        $blackListClient->first_last_name = "Marin";
        $blackListClient->second_last_name = "Vivas";
        $blackListClient->phone_number = "3144178569";
        $blackListClient->save();

        $blackListClient = new BlackList();
        $blackListClient->cedula = "58471236";
        $blackListClient->name = "David";
        $blackListClient->first_last_name = "Ruiz";
        $blackListClient->second_last_name = "Abadia";
        $blackListClient->phone_number = "3189635847";
        $blackListClient->save();

        $blackListClient = new BlackList();
        $blackListClient->cedula = "1254633";
        $blackListClient->name = "Sofia";
        $blackListClient->first_last_name = "Aguirre";
        $blackListClient->second_last_name = "Giron";
        $blackListClient->phone_number = "3122587496";
        $blackListClient->save();
    }
}
