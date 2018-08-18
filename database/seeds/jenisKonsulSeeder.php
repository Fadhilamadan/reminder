<?php

use Illuminate\Database\Seeder;

class jenisKonsulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_konsul=[
        		['id'=>'1', 'nama'=>'Matakuliah'],
        	    ['id'=>'2', 'nama'=>'Kerja Praktek'],
                ['id'=>'3', 'nama'=>'Tugas Akhir'] ];
        DB::table('jenis_konsul')->insert($jenis_konsul);
    }
}
