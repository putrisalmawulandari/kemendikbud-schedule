<?php

use Illuminate\Database\Seeder;
use App\News;
use Faker\Factory;
use App\User;
use App\Officer;
use App\Agency;
use App\Transportation;
use App\TransportationType;
use App\Employee;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrator',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make("admin123"),
        ]);



        $faker = Factory::create('id_ID');

        Agency::create([
            'name'=>'Kepala Badan Penghubung'
        ]);

        Agency::create([
            'name'=>'Sekda Prov Jaktim'
        ]);

        Agency::create([
            'name'=>'Kepala Biro Hukum'
        ]);

        TransportationType::create([
            'name'=>'Motor',
        ]);

        TransportationType::create([
            'name'=>'Mobil',
        ]);

        TransportationType::create([
            'name'=>'Lainnya',
        ]);
        

        for ($i=1; $i < 40; $i++) { 
            News::create([
                'content'=>$faker->text,
            ]);

            Officer::create([
                'name'=>$faker->name,
                'phone'=>'089712258'.$i,
                'address'=>$faker->address,
                'agency_id'=>rand(1,3),
            ]);

            Employee::create([
                'nip'=>'1160442'.$i,
                'name'=>$faker->name,
                'phone'=>'089712258'.$i,
                'address'=>$faker->address,
                'as'=>'driver',
            ]);

            Employee::create([
                'nip'=>'1160552'.$i,
                'name'=>$faker->name,
                'phone'=>'089712258'.$i,
                'address'=>$faker->address,
                'as'=>'staff',
            ]);
        }

        Transportation::create([
            'name'=>'Garuda Indonesia',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/garuda.png',
            'transporation_type_id'=>3,
        ]);

        Transportation::create([
            'name'=>'Lion Air',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/lion.png',
            'transporation_type_id'=>3,
        ]);

        Transportation::create([
            'name'=>'Citilink',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/citilink.svg',
            'transporation_type_id'=>3,
        ]);

        Transportation::create([
            'name'=>'Air Asia',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/airasia.png',
            'transporation_type_id'=>3,
        ]);

        Transportation::create([
            'name'=>'Batik Air',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/batik.png',
            'transporation_type_id'=>3,
        ]);

        Transportation::create([
            'name'=>'Kereta API',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/kereta.jpg',
            'transporation_type_id'=>3,
        ]);

        Transportation::create([
            'name'=>'Sriwijaya Air',
            'description'=>$faker->text,
            'logo'=>'app/maskapai/sriwijaya.png',
            'transporation_type_id'=>3,
        ]);
    }
}
