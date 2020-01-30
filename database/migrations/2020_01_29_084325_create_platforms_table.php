<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 100);
            $table->string('aliases', 100)->nullable();
            $table->mediumText('description')->nullable();
            $table->date('release_date')->nullable();
            $table->string('image', 200)->nullable();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');


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
        Schema::dropIfExists('platforms');
    }
}
