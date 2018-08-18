<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DosenSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(PeriodeSeeder::class);
        $this->call(jenisKonsulSeeder::class);
        $this->call(SlotSeeder::class);
        $this->call(MatakuliahSeeder::class);
        $this->call(TugasAkhirSeeder::class);
        $this->call(KerjaPraktekSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(userSeeder::class);
    }
}
