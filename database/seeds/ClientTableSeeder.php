<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
	        [
		        'title' => 'mr',
	            'name' => 'john',
	            'last_name' => 'doe',
	            'address' => 'street 123',
	            'zip_code' => '06420',
	            'city' => 'Tulsa',
	            'state' => 'ca',
	            'email' => 'john@example.com',
	        ]
        );
        DB::table('clients')->insert(
	        [
		        'title' => 'ms',
	            'name' => 'mia',
	            'last_name' => 'wallace',
	            'address' => 'street 456',
	            'zip_code' => '23658',
	            'city' => 'los angeles',
	            'state' => 'ca',
	            'email' => 'mia@example.com',
	        ]
        );
    }
}
