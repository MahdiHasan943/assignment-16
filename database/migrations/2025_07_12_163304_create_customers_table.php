<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();                         // id BIGINT PRIMARY KEY
            $table->string('name');              // name VARCHAR
            $table->string('email')->unique();   // email VARCHAR, unique
            $table->string('mobile');            // mobile VARCHAR
            $table->foreignId('user_id')         // user_id BIGINT (foreign key to users table)
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->timestamps();                // created_at, updated_at TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
