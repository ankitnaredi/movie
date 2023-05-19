<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Hash;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(['name'=>'Super admin','email'=>'info@movie.com','password'=>Hash::make('tShb;.qkq{`qN4vj')]);
        $admin->assignRole('admin');
		$premiumplan = User::create(['name'=>'Premium plan','email'=>'premiumplan@movie.com','password'=>Hash::make('B76gT~VT1Rvvn0(g')]);
        $premiumplan->assignRole('premiumplan');
		$basicplan = User::create(['name'=>'Basic plan','email'=>'basicplan@movie.com','password'=>Hash::make('PFSv2vMFGbF$U|Cf')]);
        $basicplan->assignRole('basicplan');
    }
}
