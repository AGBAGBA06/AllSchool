<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->text('nom');
            $table->string('address');
            $table->text('description');
            $table->string('image_couverture');
            $table->text('tel');
            $table->string('type')->nullable();
            $table->string('resultatcep');
            $table->string('resultatbepc');
            $table->string('resultatbac');
            $table->text('directeur');
            $table->text('niveau_scolaire');
            $table->text('ville');
            $table->text('domaine');
            $table->integer('status');
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
        Schema::dropIfExists('ecoles');
    }
};
