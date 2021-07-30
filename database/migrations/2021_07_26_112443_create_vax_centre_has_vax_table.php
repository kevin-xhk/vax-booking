<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaxCentreHasVaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vax_centre_has_vax', function (Blueprint $table) {
            $table->unsignedBigInteger('vax_centre_id');
            $table->unsignedBigInteger('vax_id');
            $table->integer('stock');
            $table->timestamps();

            $table->primary(['vax_centre_id', 'vax_id']);
            $table->foreign('vax_centre_id')->references('id')->on('vaccine_centres');
            $table->foreign('vax_id')->references('id')->on('vaccines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vax_centre_has_vax');
    }
}
