<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fristname');
            $table->string('lastname');
            $table->string('email');
            $table->bigInteger('number');
            $table->string('address');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->unsignedSmallInteger('zip');
            $table->string('course');
            $table->unsignedSmallInteger('amount');
            $table->string('payment_method');
            $table->string('stripe_id')->collation('utf8mb4_bin');
            $table->string('stripe_plan');
            $table->integer('quantity');
            $table->timestamp('trial_ends_at')->nullable();

            





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
        Schema::dropIfExists('payments');
    }
}
