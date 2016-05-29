<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('email')->unique();
            $table->string('type');
            $table->string('id_number')->nullable();
            $table->string('certificate')->nullable();
            $table->string('token');
            $table->boolean('is_active')->default(0);
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
        Schema::drop('requests');
    }
}
