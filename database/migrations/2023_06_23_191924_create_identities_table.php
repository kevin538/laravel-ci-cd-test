<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('multiselectITC')->nullable()->default(null);
            $table->string('multiselectIMU')->nullable()->default(null);
            $table->string('multiselectIRO')->nullable()->default(null);
            $table->string('multiselectIMV')->nullable()->default(null);
            $table->string('multiselectIIO')->nullable()->default(null);
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
        Schema::dropIfExists('identities');
    }
}
