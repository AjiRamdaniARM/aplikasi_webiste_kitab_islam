<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentKitabsTable extends Migration
{
    public function up()
    {
        Schema::create('content_kitabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_islami_kitabs');
            $table->unsignedBigInteger('id_kitab_details');
            $table->unsignedBigInteger('id_kitab_hadits');
            $table->unsignedBigInteger('id_status_kitabs');
            $table->unsignedBigInteger('id_latin_arabs');
            $table->timestamps();

            // $table->foreign('id_islami_kitabs')->references('id')->on('islami_kitabs')->onDelete('cascade');
            // $table->foreign('id_kitab_details')->references('id')->on('detail_kitabs')->onDelete('cascade');
            // $table->foreign('id_kitab_hadits')->references('id')->on('kitab_hadits')->onDelete('cascade');
            // $table->foreign('id_status_kitabs')->references('id')->on('status_kitabs')->onDelete('cascade');
            // $table->foreign('id_latin_arabs')->references('id')->on('latin_arabs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('content_kitabs');
    }
}
