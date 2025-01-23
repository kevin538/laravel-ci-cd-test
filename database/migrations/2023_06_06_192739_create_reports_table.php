<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('cfm');
            $table->string('cqn')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('vacinetype');
            $table->string('prn');
            $table->string('dsr');
            $table->string('nof');
            $table->string('bn');
            $table->string('dom');
            $table->string('ed');
            $table->string('dv');
            $table->boolean('deleted')->default(false);
            $table->string('note')->nullable()->default(null);
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
        Schema::dropIfExists('reports');
    }
}