<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class anggotaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
            'noanggota'=>'1110',
            'namaanggota'=>'ismat',
            'tgllahir'=>'2005-04-18',
            'gender'=>'L',
            'alamat'=>'cipanas',
            'notelp'=>'08781234123',
        ]);
        DB::table('anggotas')->insert([
            'noanggota'=>'1111',
            'namaanggota'=>'ridwan',
            'tgllahir'=>'2005-05-14',
            'gender'=>'L',
            'alamat'=>'cianjur',
            'notelp'=>'08781234124',
        ]);
    }
}
