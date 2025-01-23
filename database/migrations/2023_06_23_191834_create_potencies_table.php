<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potencies', function (Blueprint $table) {
            $table->id();
            $table->string('multiselectPTC')->nullable()->default(null);
            $table->string('multiselectPMU')->nullable()->default(null);
            $table->string('multiselectPRO')->nullable()->default(null);
            $table->string('multiselectPMV')->nullable()->default(null);
            $table->string('multiselectPIO')->nullable()->default(null);
            $table->string('cqn')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potencies');
    }
}