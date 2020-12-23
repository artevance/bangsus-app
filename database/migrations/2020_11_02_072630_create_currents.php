<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currents', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->unique();
            $table->string('name', 200);
            $table->string('first_unit', 20)->nullable();
            $table->string('second_unit', 20)->nullable();
            $table->decimal('second_ratio', 20, 5)->nullable();
            $table->string('third_unit', 20)->nullable();
            $table->decimal('third_ratio', 20, 5)->nullable();
            $table->string('fourth_unit', 20)->nullable();
            $table->decimal('fourth_ratio', 20, 5)->nullable();
            $table->string('fifth_unit', 20)->nullable();
            $table->decimal('fifth_ratio', 20, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currents');
    }
}
