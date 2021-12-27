<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblLopsh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lopsh', function (Blueprint $table) {
            $table->increments('idlop');
            $table->integer('idnganh');
            $table->string('tenlop');
            $table->timestamps();
        });
        $name=array('19D','19V','19T','19TP','19MT','19SH','19C','19OT','19N','19XD','19VL','19HT','19SP');
        $i=1;
        foreach($name as $key => $value){
            DB::table('tbl_lopsh')->insert([
                'idnganh' => $i,
                'tenlop' => $value.'1'
            ]);
            DB::table('tbl_lopsh')->insert([
                'idnganh' => $i,
                'tenlop' => $value.'2'
            ]);
            $i++;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lopsh');
    }
}
