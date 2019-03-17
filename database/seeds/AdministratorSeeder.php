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
        $admin = new \App\User;
        $admin->username="admin";
        $admin->name="Administrator";
        $admin->email="admin@azizshop.test";
        $admin->roles=json_encode(["ADMIN"]);
        $admin->password=\Hash::make("admin");
        $admin->avatar="admin.png";
        $admin->address="Bandung";
        $admin->phone="089601566958";

        $admin->save();
        $this->command->info("User Admin berhasil ditambah");
    }
}
