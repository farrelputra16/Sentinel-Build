<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjasTable extends Migration
{
    public function up()
    {
        Schema::create('worker', function (Blueprint $table) {
            $table->string('nama');
            $table->string('id', 15)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('worker');
    }
}