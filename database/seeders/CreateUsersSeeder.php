<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [
            [
               'company_name'=>'CML consolidation & logistic services ltd',
               'company_address'=>'Chandrashila Suvastu Tower (11th Floor) 69/1, Bir Uttam Qazi Nuruzzaman Road Panthapath, Dhaka - 1205, Bangladesh',
               'first_name'=>'Azmain',
               
               'last_name'=>' Bhuiyan',
               'phone'=>'+88 01813 333 458 ',
               'vat_license'=>'08465234567',
               'bin_certificate'=>'000385496-0203',
               'ain_certificate'=>'301130369',
               'email'=>'it@cclsbd.com',
               'password'=> bcrypt('CCLS774Ccls174!@#$01713515685'),
               'type'=>1,
               
            ],
             [
                'company_name'=>' User',
                'company_address'=>' User',
                'first_name'=>'iuser ',
                
                'last_name'=>' User',
                'phone'=>'01828908465',
                'vat_license'=>'08465234567',
                'bin_certificate'=>'08465234567',
                'ain_certificate'=>'08465234567',
                'email'=>'user@gmail.com',
                'password'=> bcrypt('123456'),
                'type'=>0,
                
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
