<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('users')->unsigned();
            $table->string('no_hp', 15);
            $table->text('alamat');
            $table->string('tempat_lahir', 255);
            $table->datetime('tanggal_lahir');
            $table->timestamps();

            $table->foreign('users')->references('id')->on('users')->onDelete('cascade');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biodata', function (Blueprint $table) {
            //
        });
    }
}
