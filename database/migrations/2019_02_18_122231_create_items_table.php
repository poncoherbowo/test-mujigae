<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // $table->string('create_date');
            // $table->string('modified_date');
            $table->string('item');
            $table->integer('count');
            // $table->string('price');
            $table->double('price', 15, 2);
            // $table->string('paid');
            $table->double('paid', 15, 2);
            $table->softDeletes();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
