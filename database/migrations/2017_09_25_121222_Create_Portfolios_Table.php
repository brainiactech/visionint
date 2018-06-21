<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->references('id')->on('Members');
            $table->integer('scheme_id');
            $table->integer('starting_class_id');
            $table->integer('stage_id');
            $table->text('portfolio_code')->nullable();
            $table->text('teller_id')->nullable();
            $table->text('transaction_id')->nullable();
            $table->boolean('approved_status')->default(false);
            $table->boolean('disapproved_status')->default(false);
            $table->integer('approved_by')->default(0);
            $table->integer('refered_by')->default(0);//the id of the portfolio that refered this particular portfolio, left as 0 if nobody refered this member.
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
        Schema::dropIfExists('Portfolios');
    }
}
