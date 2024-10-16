<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQaBootcampsTable extends Migration
{
    public function up()
    {
        Schema::create('qa_bootcamps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->boolean('has_whatsapp')->default(false);
            $table->integer('experience')->unsigned();
            $table->string('expectation', 255);
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('qa_bootcamps');
    }
}
