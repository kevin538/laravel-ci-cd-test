<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stabilities', function (Blueprint $table) {
            $table->id();
            $table->string('multiselectSTTC')->nullable()->default(null);
            $table->string('multiselectSTMU')->nullable()->default(null);
            $table->string('multiselectSTRO')->nullable()->default(null);
            $table->string('multiselectSTMV')->nullable()->default(null);
            $table->string('multiselectSTIO')->nullable()->default(null);
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
        Schema::dropIfExists('stabilities');
    }
}