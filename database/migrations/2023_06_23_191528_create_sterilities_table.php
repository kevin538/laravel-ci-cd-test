<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSterilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sterilities', function (Blueprint $table) {
            $table->id();
            $table->string('multiselectTC')->nullable()->default(null);
            $table->string('multiselectMU')->nullable()->default(null);
            $table->string('multiselectRO')->nullable()->default(null);
            $table->string('multiselectMV')->nullable()->default(null);
            $table->string('multiselectIO')->nullable()->default(null);
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
        Schema::dropIfExists('sterilities');
    }
}
