<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_version', function (Blueprint $table) {
            $table->id()->comment('ID')->autoIncrement();
            $table->string('version')->comment('バージョン');
            $table->dateTime('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('登録日時');
            $table->dateTime('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
                ->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_version');
    }
}
