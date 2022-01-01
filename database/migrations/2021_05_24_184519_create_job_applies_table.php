<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('created_by');
            $table->string('created_by_name');
            $table->string('applied_jobid');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            
            $table->string('sphone'); //Secondary Phonenumber
            $table->string('location');
            $table->string('ctc');
            $table->string('expected_ctc');
            $table->string('notice_period');
            $table->string('notice_period_buyable');
            $table->string('current_organisation');
            
            $table->string('primary_technology');//PrimaryTechnology
            $table->string('secondary_skills');
            $table->string('status');
            $table->mediumText('file');

            $table->string('dob');
            $table->string('totalexp');
            $table->string('relexp');
            $table->string('positiontype');
            $table->string('relocate');
            $table->string('qualification');
            $table->string('communication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applies');
    }
}
