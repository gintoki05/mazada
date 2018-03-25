<?php

use Illuminate\Database\Seeder;

class DataSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datasiswa')->insert([
            'nis' => '123456',
            'nama' => 'budi',
            ],
            [
            'nis' => '234567',
            'nama' => 'agus',
            ],
            [
            'nis' => '345678',
            'nama' => 'ajie',
            ]);
    }
}
