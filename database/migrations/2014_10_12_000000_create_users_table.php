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
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dateofbirth');
            $table->integer('token');
            $table->rememberToken();
            $table->boolean('active')->default(0);
            $table->integer('selected_cardskin')->default(1);
            $table->bigInteger('apikey')->nullable();
            $table->boolean('banned')->default(0);
            $table->enum('role', ['customer', 'adminestrator'])->default('customer');
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
