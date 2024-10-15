<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQABootcampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qa_bootcamps', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID for ID
            $table->string('name', 100);
            $table->string('province', 100);
            $table->string('regency', 100);
            $table->string('district', 100);
            $table->string('village', 100);
            $table->integer('experience');
            $table->string('expectation', 255);
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
        Schema::dropIfExists('qa_bootcamps');
    }
}
