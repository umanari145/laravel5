<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers4 extends Migration
{

    public function run()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            // 新規カラムを追加する
            $table->string('short_name22', 234);
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
