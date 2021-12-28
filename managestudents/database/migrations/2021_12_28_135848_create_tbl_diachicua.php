<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblDiachicua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_diachicua', function (Blueprint $table) {
            $table->increments('iddcc');
            $table->string('tendcc');
            $table->timestamps();
        });
        $list=array('Nhà trọ, KTX','Họ hàng, Người quen','Gia đình');
        for($i=0;$i<=2;$i++){
        DB::table('tbl_diachicua')->insert([
            'tendcc' =>$list[$i]
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
        Schema::dropIfExists('tbl_diachicua');
    }
}
