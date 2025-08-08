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
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->string('adminID')->primary();
            $table->string('adminFname');
            $table->string('adminMI');
            $table->string('adminLname');
            $table->string('adminEmail');
            $table->string('adminPassword');
            $table->enum('adminAccess', ['reviewer','iacucadmin', 'erbadmin','superadmin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_admin');
    }
};
