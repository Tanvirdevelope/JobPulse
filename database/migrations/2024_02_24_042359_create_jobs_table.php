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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('designation');
            $table->date('application_deadline');
            $table->string('company_logo');
            $table->string('vacancy_count');
            $table->string('job_location');
            $table->string('minimum_salary');
            $table->date('published_date');
            $table->text('requirements');
            $table->text('responsibilities');
            $table->text('benefits');
            $table->string('employment_status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
