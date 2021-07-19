<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFntransationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fntransations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fncategory_id');
            $table->unsignedBigInteger('fnwallet_id');
            $table->string('name');
            $table->enum('type', ['revenue', 'expense', 'transferwallet']);
            $table->decimal('value', $precision = 8, $scale = 2);
            $table->date('due_date');
            $table->date('pay_date')->nullable();
            $table->timestamps();

            $table->foreign('fncategory_id')->references('id')->on('fncategories');
            $table->foreign('fnwallet_id')->references('id')->on('fnwallets');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fntransations');
    }
}
