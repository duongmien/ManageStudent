<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblDantoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dantoc', function (Blueprint $table) {
            $table->increments('iddt');
            $table->string('tendt');
            $table->timestamps();
        });
        $list=array('Kinh','Tày','Thái','Mường','Khmer','Hoa','Nùng',"H'Mông",'Dao');
        for($i=0;$i<=8;$i++){
        DB::table('tbl_dantoc')->insert([
            'tendt' =>$list[$i]
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
        Schema::dropIfExists('tbl_dantoc');
    }
}
