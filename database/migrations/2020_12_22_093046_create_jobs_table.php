<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('created_by');
            $table->string('created_by_name');
            $table->string('bw_job_name');
            $table->string('bw_job_title');
            $table->longText('bw_job_description');
            $table->string('bw_job_pskills');
            $table->string('bw_job_sskills');
            $table->string('bw_job_oskills');
            $table->string('bw_job_location');

            $table->string('bw_job_exp');

            $table->string('bw_job_minsal');
            $table->string('bw_job_maxsal');
            $table->string('bw_job_type');
            $table->string('bw_job_wlocation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
