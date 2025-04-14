<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'name' => 'Rafi',
            'alamat' => 'Jl Jati',
            'no_hp' => '0812978654321',
            'role' => 'dokter',
            'email' => 'rafi@gmail.com',
            'password' => 'password'
        ],
[
            'name' => 'Dimas',
            'alamat' => 'Jl itu',
            'no_hp' => '087654321',
            'role' => 'pasien',
            'email' => 'dimas@gmail.com',
            'password' => 'password'
        ],
        ];
        foreach($data as $d){
            User::create([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'email' => $d['email'],
                'password' => $d['password'],
            ]);
        }
    }
}
