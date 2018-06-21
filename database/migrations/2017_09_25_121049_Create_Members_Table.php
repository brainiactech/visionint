<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Members', function (Blueprint $table) {
            $table->increments('id');
            $table->text('full_name');
            $table->text('phone');
            $table->text('email');
            $table->text('location');
            $table->date('date_of_birth');
            $table->text('gender');
            $table->boolean('approved_status')->default(false);
            $table->boolean('disapproved_status')->default(false);
            $table->integer('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('Members');
    }
}
