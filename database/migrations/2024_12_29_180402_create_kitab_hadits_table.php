<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitabHaditsTable extends Migration
{
    public function up()
    {
        Schema::create('kitab_hadits', function (Blueprint $table) {
            $table->id();
            $table->string('kode_id_hs');
            $table->text('deksripsi_hadits');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kitab_hadits');
    }
}
