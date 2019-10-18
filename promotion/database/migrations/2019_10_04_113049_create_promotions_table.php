<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('proId');
            $table->string('proTitle');
            $table->string('description');
            $table->date('createdDate');
            $table->date('startProDate');
            $table->date('endProDate');
            $table->string('rateDiscount');
            $table->integer('price');
            $table->integer('balance');
            $table->integer('catId');
            $table->integer('comId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
