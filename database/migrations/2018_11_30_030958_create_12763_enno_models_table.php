<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create12763EnnoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12763_enno_models', function (Blueprint $table) {
            $table->increments('id');
			$table->varchar('name');
			$table->varchar('username');
			$table->varchar('password');
			$table->varchar('companyEmail');
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
        Schema::dropIfExists('12763_enno_models');
    }
}
