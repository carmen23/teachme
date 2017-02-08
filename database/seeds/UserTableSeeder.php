<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class DatabaseSeeder extends Seeder
{

	public function run()
    {
        $this->createAdmin();
    }

    private function createAdmin()
    {
    	User::create([

    		'name' => 'Carmen Rojas',
    		'email' => 'carmenluisarojas890@gmail.com',
    		'password' => bcrypt ('admin'),



    		]);
    	


    }
}
