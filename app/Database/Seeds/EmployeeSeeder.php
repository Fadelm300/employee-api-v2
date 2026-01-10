<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Faisal Ahmed', 'email' => 'faisal.ahmed@test.com', 'position' => 'Developer', 'salary' => 1550, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Hassan Ali', 'email' => 'hassan.ali@test.com', 'position' => 'Designer', 'salary' => 1450, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Mariam Saleh', 'email' => 'mariam.saleh@test.com', 'position' => 'HR', 'salary' => 1600, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Abdulaziz Nasser', 'email' => 'abdulaziz.nasser@test.com', 'position' => 'Manager', 'salary' => 2100, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Yara Khalil', 'email' => 'yara.khalil@test.com', 'position' => 'Tester', 'salary' => 1350, 'status' => 'inactive', 'created_at' => date('Y-m-d H:i:s')],

            ['name' => 'Sultan Mahmoud', 'email' => 'sultan.mahmoud@test.com', 'position' => 'Developer', 'salary' => 1500, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Reem Saad', 'email' => 'reem.saad@test.com', 'position' => 'Designer', 'salary' => 1420, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Kareem Adel', 'email' => 'kareem.adel@test.com', 'position' => 'Tester', 'salary' => 1380, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Nada Yassin', 'email' => 'nada.yassin@test.com', 'position' => 'HR', 'salary' => 1580, 'status' => 'inactive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Majed Saleem', 'email' => 'majed.saleem@test.com', 'position' => 'Manager', 'salary' => 2050, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],

            ['name' => 'Bilal Farooq', 'email' => 'bilal.farooq@test.com', 'position' => 'Developer', 'salary' => 1520, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Hala Sameer', 'email' => 'hala.sameer@test.com', 'position' => 'Designer', 'salary' => 1430, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Anas Tawfiq', 'email' => 'anas.tawfiq@test.com', 'position' => 'Tester', 'salary' => 1360, 'status' => 'inactive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Lina Fares', 'email' => 'lina.fares@test.com', 'position' => 'HR', 'salary' => 1620, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Othman Qasem', 'email' => 'othman.qasem@test.com', 'position' => 'Manager', 'salary' => 2150, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],

            ['name' => 'Tamer Rashed', 'email' => 'tamer.rashed@test.com', 'position' => 'Developer', 'salary' => 1510, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Samar Nabil', 'email' => 'samar.nabil@test.com', 'position' => 'Designer', 'salary' => 1440, 'status' => 'inactive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Iyad Mustafa', 'email' => 'iyad.mustafa@test.com', 'position' => 'Tester', 'salary' => 1340, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Bushra Latif', 'email' => 'bushra.latif@test.com', 'position' => 'HR', 'salary' => 1590, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Adel Hamdan', 'email' => 'adel.hamdan@test.com', 'position' => 'Manager', 'salary' => 2080, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],

            ['name' => 'Nabil Zaki', 'email' => 'nabil.zaki@test.com', 'position' => 'Developer', 'salary' => 1530, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Rasha Amin', 'email' => 'rasha.amin@test.com', 'position' => 'Designer', 'salary' => 1410, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Yahya Ismail', 'email' => 'yahya.ismail@test.com', 'position' => 'Tester', 'salary' => 1370, 'status' => 'inactive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Manal Farid', 'email' => 'manal.farid@test.com', 'position' => 'HR', 'salary' => 1610, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Fawaz Jaber', 'email' => 'fawaz.jaber@test.com', 'position' => 'Manager', 'salary' => 2120, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],

            ['name' => 'Sameh Kanaan', 'email' => 'sameh.kanaan@test.com', 'position' => 'Developer', 'salary' => 1500, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Noor Hatem', 'email' => 'noor.hatem@test.com', 'position' => 'Designer', 'salary' => 1450, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Basem Shakir', 'email' => 'basem.shakir@test.com', 'position' => 'Tester', 'salary' => 1330, 'status' => 'inactive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Rania Fathi', 'email' => 'rania.fathi@test.com', 'position' => 'HR', 'salary' => 1600, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Hisham Mansour', 'email' => 'hisham.mansour@test.com', 'position' => 'Manager', 'salary' => 2180, 'status' => 'active', 'created_at' => date('Y-m-d H:i:s')],
        ];

        $this->db->table('employees')->insertBatch($data);
    }
}
