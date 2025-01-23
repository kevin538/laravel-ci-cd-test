<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSafetiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safeties', function (Blueprint $table) {
            $table->id();
            $table->string('multiselectSTC')->nullable()->default(null);
            $table->string('multiselectSMU')->nullable()->default(null);
            $table->string('multiselectSRO')->nullable()->default(null);
            $table->string('multiselectSMV')->nullable()->default(null);
            $table->string('multiselectSIO')->nullable()->default(null);
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
        Schema::dropIfExists('safeties');
    }
}
