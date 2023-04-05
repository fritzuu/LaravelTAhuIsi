<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('siswa')->insert([
            'nama'=> 'Revan',
            'nomor_induk'=> '1000',
            'alamat'=> 'Gentan',
            'created_at'=>date('Y-m-d H:i:s')

        ]);

        DB::table('siswa')->insert([
            'nama'=> 'Ronald',
            'nomor_induk'=> '1001',
            'alamat'=> 'Jaten',
            'created_at'=>date('Y-m-d H:i:s')

        ]);

        DB::table('siswa')->insert([
            'nama'=> 'Juan',
            'nomor_induk'=> '1002',
            'alamat'=> 'Baki',
            'created_at'=>date('Y-m-d H:i:s')

        ]);
    }
}
