<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblKhuvuctuyensinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khuvuctuyensinh', function (Blueprint $table) {
            $table->increments('idts');
            $table->string('tenkv');
            $table->timestamps();
        });
        $list=array('KV1','KV2','KV2NT','KV3');
        for($i=0;$i<=3;$i++){
        DB::table('tbl_khuvuctuyensinh')->insert([
            'tenkv' =>$list[$i]
        ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_khuvuctuyensinh');
    }
}
