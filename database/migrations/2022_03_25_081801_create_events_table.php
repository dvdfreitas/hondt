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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            // $table->text('description')->nullable();
            // $table->string('web')->nullable();
            // $table->string('type')->nullable();
            // $table->boolean('highlight')->default(false);
            // $table->date('start_date');
            // $table->date('end_date')->nullable();
            // $table->json('info')->nullable();
            // $table->string('location')->nullable();
            // $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('events');
    }
};
