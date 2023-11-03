<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection1DataTable extends Migration
{
    public function up()
    {
        Schema::create('section1_data', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('home_section1_title'); // Title field
            $table->text('home_section1_text'); // Text field
            $table->string('home_section2_videoid'); // Vimeo Video ID
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('section1_data');
    }
}

