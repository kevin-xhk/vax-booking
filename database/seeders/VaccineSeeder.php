<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Seeder;
use DB;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('vaccines')->count();
        
        if($count == 0){
            Vaccine::factory()->count(5)->create();
        }

    }
}
