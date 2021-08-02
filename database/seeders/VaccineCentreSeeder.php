<?php

namespace Database\Seeders;

use App\Models\VaccineCentre;
use Illuminate\Database\Seeder;
use DB;

class VaccineCentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('vaccine_centres')->count();
        
        if($count == 0){
            VaccineCentre::factory()->count(10)->create();
        }
    }
}
