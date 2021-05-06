<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCactusDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('cactus_dishes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('category_id')->unsigned();
            $table->text("photo");
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->boolean('is_published')->default(false);
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('cactus_dishes_categories');
            $table->index('is_published');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cactus_dishes');
    }
}
