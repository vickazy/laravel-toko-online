<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
            $admin = new \App\User;
            $admin->username=$faker->unique()->username;
            $admin->name=$faker->name;
            $admin->email=$faker->unique()->email;
            $admin->roles=json_encode(["ADMIN"]);
            $admin->password=\Hash::make("admin");
            $admin->avatar="";
            $admin->address=$faker->address;
            $admin->phone=$faker->phoneNumber;

            $admin->save();
        };
        $this->command->info("User Admin berhasil ditambah");
    }
}
