<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'jenis'=> 'sastra',
            'ket'=> 'oke'
        ]);
        DB::table('kategoris')->insert([
            'jenis'=> 'komputer',
            'ket'=> 'oke'
        ]);
        DB::table('kategoris')->insert([
            'jenis'=> 'fiksi',
            'ket'=> 'oke'
        ]);
    }
}
