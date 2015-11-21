<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kinh extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('kinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->text('desc');
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
    public function down() {
        Schema::drop('kinh');
    }
}
