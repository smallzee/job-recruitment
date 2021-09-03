<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email_address')->unique();
            $table->string('password')->nullable();
            $table->string('full_name');
            $table->string('application_id')->nullable();
            $table->string('phone_number');
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('educational_background')->nullable();
            $table->text('address')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->double('basic_salary')->default(0);
            $table->double('allowance')->default(0);
            $table->text('attachment')->nullable();
            $table->integer('role')->default(1);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('users');
    }
}
