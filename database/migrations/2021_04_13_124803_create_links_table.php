<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('descricao');
			$table->string('link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
}
