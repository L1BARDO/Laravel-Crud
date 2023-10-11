<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuentas')->insert([
            ['usuario' => 'Usuario1', 'correo' => 'usuario1@example.com', 'telefono' => '1234567890', 'cedula' => '123456789', 'saldo' => 100.00],
            ['usuario' => 'Usuario2', 'correo' => 'usuario2@example.com', 'telefono' => '9876543210', 'cedula' => '987654321', 'saldo' => 200.00],
            ['usuario' => 'Usuario3', 'correo' => 'usuario3@example.com', 'telefono' => '9876543211', 'cedula' => '987654322', 'saldo' => 300.00],
            ['usuario' => 'Usuario4', 'correo' => 'usuario4@example.com', 'telefono' => '9876543212', 'cedula' => '987654323', 'saldo' => 400.00],
            ['usuario' => 'Usuario5', 'correo' => 'usuario5@example.com', 'telefono' => '9876543213', 'cedula' => '987654324', 'saldo' => 500.00],
            ['usuario' => 'Usuario6', 'correo' => 'usuario6@example.com', 'telefono' => '9876543214', 'cedula' => '987654325', 'saldo' => 600.00],
            ['usuario' => 'Usuario7', 'correo' => 'usuario7@example.com', 'telefono' => '9876543215', 'cedula' => '987654326', 'saldo' => 700.00],
            ['usuario' => 'Usuario8', 'correo' => 'usuario8@example.com', 'telefono' => '9876543216', 'cedula' => '987654327', 'saldo' => 800.00],
            ['usuario' => 'Usuario9', 'correo' => 'usuario9@example.com', 'telefono' => '9876543217', 'cedula' => '987654328', 'saldo' => 900.00],
            ['usuario' => 'Usuario10', 'correo' => 'usuario10@example.com', 'telefono' => '9876543218', 'cedula' => '987654329', 'saldo' => 1000.00],
            // Agrega más registros aquí
        ]);
    }
}
