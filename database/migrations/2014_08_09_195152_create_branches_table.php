<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name');
            $table->timestamps();
        });

        DB::table('branches')->insert(
            array(
                'branch_name'=>'Head Office',
            )
        );
    }

    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
