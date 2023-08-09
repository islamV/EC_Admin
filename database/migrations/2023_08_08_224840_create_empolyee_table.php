<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empolyee', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('Position');
            $table->string('Office');
            $table->string('email');
            $table->string('phone');
            $table->integer('age');
            $table->date('start_date');
            $table->float('salary')->default(0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empolyee');
    }
};
