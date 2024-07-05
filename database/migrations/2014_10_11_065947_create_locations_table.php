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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('location_type_id')->nullable();
            $table->foreign('location_type_id')->references('id')->on('location_types')->onDelete('cascade');

            $table->unsignedBigInteger('under_cmd_loc_id')->nullable();
            $table->foreign('under_cmd_loc_id')
                  ->references('id')
                  ->on('locations')
                  ->onDelete('set null');

            $table->unsignedBigInteger('mo_loc_id')->nullable();
            $table->foreign('mo_loc_id')
                ->references('id')
                ->on('locations')
                ->onDelete('set null');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
