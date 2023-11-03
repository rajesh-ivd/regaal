<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneyTable extends Migration
{
    public function up()
    {
        Schema::create('journey', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journey');
    }
}

