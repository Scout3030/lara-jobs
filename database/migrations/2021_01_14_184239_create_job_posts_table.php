<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedBigInteger('job_type_id');
            $table->foreign('job_type_id')->references('id')->on('job_types');
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->unsignedBigInteger('currency_id')->default(3);
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->string('title');
            $table->string('description');
            $table->string('salary');
            $table->string('slug')->unique();
            $table->date('deadline')->nullable();
            $table->enum('tag', [
                \App\Models\JobPost::FEATURED, \App\Models\JobPost::URGENT, \App\Models\JobPost::IMMEDIATE
            ])->comment('1: Featured, 2:Urgent, 3:Immediate')
                ->default(\App\Models\JobPost::FEATURED);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
}
