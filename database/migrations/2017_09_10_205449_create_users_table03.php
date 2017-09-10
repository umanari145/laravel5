<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable03 extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            // 新規カラムを追加する
            $table->string('short_name',234);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
