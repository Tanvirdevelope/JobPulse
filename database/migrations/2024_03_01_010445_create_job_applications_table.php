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

            $table->UnsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('company_infos')
                  ->restrictOnDelete()->cascadeOnUpdate(); // Foreign key to company_info table

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('job_circulars')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->string('candidate_address',200);
            $table->string('candidate_birth',50);
            $table->string('candidate_age',50);
            $table->enum('candidate_gender',['male','female']);
            $table->string('candidate_image');
            $table->string('candidate_signature');

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
