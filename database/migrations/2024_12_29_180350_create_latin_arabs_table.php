<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatinArabsTable extends Migration
{
    public function up()
    {
        Schema::create('latin_arabs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_id_la');
            $table->text('content_latin');
            $table->text('content_arab');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('latin_arabs');
    }
}
