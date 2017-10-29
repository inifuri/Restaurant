<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
           'username' => 'diego',
           'password' => bcrypt('12345'),
           'nombres' => 'diego',
           'apellidos' => 'berrios',
           'email' => 'diego@gmal.com',
           'categoria' => 'Administrador',
           ]);
    }
}
