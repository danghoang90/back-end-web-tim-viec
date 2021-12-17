<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employer = new Employer();
        $employer->email = 'hoang@gmail.com';
        $employer->password = Hash::make('123456');
        $employer->contact_person_name = 'Dang Hoang';
        $employer->phone_number = '1233456789';
        $employer->name_employer = 'TIKI';
        $employer->address_employer = '164 Lê Thanh Nghị ';
        $employer->city = 'Hà Nội';
        $employer->status = '2';
        $employer->save();
        $employer = new Employer();
        $employer->email = 'admin@gmail.com';
        $employer->password = Hash::make('123456');
        $employer->contact_person_name = 'Dang Huy';
        $employer->phone_number = '1233456789';
        $employer->name_employer = 'FPT';
        $employer->address_employer = '209 Võ Thị Sáu';
        $employer->city = 'Hồ Chí Minh';
        $employer->status = '2';
        $employer->save();

    }
}
