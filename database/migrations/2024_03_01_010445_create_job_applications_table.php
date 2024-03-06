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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('job_circulars')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->string('first_name',200);
            $table->string('last_name',50);
            $table->string('address',50);
            $table->string('gender');
            $table->date('birth_date');
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->string('cv')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
