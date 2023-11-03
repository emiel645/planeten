<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('planets', function (Blueprint $table) {
        $table->unsignedBigInteger('solar_system_id');
        $table->foreign('solar_system_id')->references('id')->on('solar_systems');
    });
}

    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            //
        });
    }
};
