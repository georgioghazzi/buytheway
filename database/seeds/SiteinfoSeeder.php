<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Setting;

class SiteinfoSeeder extends Seeder {


	public function run(){
			
		\Eloquent::unguard();


        \DB::table('settings')->truncate();

        $siteinfo = Setting::create(
            [
                'site_name' => 'Buy The Way',
                'slogan' => '',
                'address' => 'Sed El Baouchrieh',
                'phone' => '03 999 025',
                'email' => '',
                'owner_name' => 'Gilbert Hasbany',
                'currency_code' => 'USD',
                'alert_quantity' => 5,
            ]
        );      

    }

}