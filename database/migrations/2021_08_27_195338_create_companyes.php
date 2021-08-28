<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyes', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
              $table->string('LastName');
                $table->string('Email')->unique();
                  $table->string('Country');
                    $table->string('UserName')->unique();
                      $table->string('Password');
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
        Schema::dropIfExists('companyes');
    }
}
