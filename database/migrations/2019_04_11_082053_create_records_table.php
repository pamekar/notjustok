<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('upload_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('isrc')->nullable();
            $table->string('artist')->nullable();
            $table->string('product_title')->nullable();
            $table->string('container_title')->nullable();
            $table->string('label')->nullable();
            $table->string('country')->nullable();
            $table->integer('total_plays')->nullable();
            $table->integer('revenue')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
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
        Schema::dropIfExists('records');
    }
}
