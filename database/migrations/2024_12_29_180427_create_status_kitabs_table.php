<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusKitabsTable extends Migration
{
    public function up()
    {
        Schema::create('status_kitabs', function (Blueprint $table) {
            $table->id();
            $table->string('name_status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_kitabs');
    }
}
