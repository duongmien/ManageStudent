<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblTongiao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tongiao', function (Blueprint $table) {
            $table->increments('idtg');
            $table->string('tentg');
            $table->timestamps();
        });
        $list=array('Không','Công giáo','Phật giáo','Hòa Hảo','Tin Lành','Cao Đài','Hồi giáo');
        for($i=0;$i<=6;$i++){
        DB::table('tbl_tongiao')->insert([
            'tentg' =>$list[$i]
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
        Schema::dropIfExists('tbl_tongiao');
    }
}
