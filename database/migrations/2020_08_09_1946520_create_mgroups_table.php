<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgroups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->string('group_location');
            $table->timestamps();
            $table->unsignedBigInteger('default_branch_id');
            $table->unsignedBigInteger('default_user_id');

            $table->foreign('default_branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('default_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgroups');
    }
}
