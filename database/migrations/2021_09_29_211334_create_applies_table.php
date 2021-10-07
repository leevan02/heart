<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            

            $table->string('pimage')->nullable();


            $table->string('fname');
            $table->string('lname');

            $table->string('email');
            $table->string('gender');

            $table->string('course');
            

            $table->string('class');
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->string('address5')->nullable();

            $table->string('qualification')->nullable();
            $table->string('school')->nullable();
            $table->string('certi')->nullable();
            $table->string('year')->nullable();


            $table->string('price');
            $table->string('card')->nullable();
            $table->string('cvc')->nullable();
            $table->string('expire')->nullable();
            $table->string('card_holder')->nullable();
            $table->string('cash')->nullable();
            $table->string('status')->default('pending');

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
        Schema::dropIfExists('applies');
    }
}
