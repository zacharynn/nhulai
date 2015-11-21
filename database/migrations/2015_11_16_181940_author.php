<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Author extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kinh_id')->unsigned()->index();
            $table->foreign('kinh_id')->references('id')->on('kinh')->onDelete('cascade');
            $table->string('name')->index();
            $table->integer('updated_by')->default(0)->index();
            $table->integer('deleted_by')->default(0)->index();
            $table->timestamp('created_at')->index();
            $table->timestamp('updated_at')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('author');
    }
}
