<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblNganh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nganh', function (Blueprint $table) {
            $table->increments('idnganh');
            $table->integer('idkhoa');
            $table->string('tennganh');
            $table->timestamps();
            
        });
        $i=1;
        $name=array('Công nghệ Kỹ thuật Điện','Công nghệ Kỹ thuật Điện tử - Viễn thông','Công nghệ thông tin','Kỹ thuật thực phẩm','Công nghệ Kỹ thuật Môi trường','Sinh học Ứng dụng','Công nghệ Kỹ thuật Cơ khí','Công nghệ Kỹ thuật Ô tô','Công nghệ Kỹ thuật Nhiệt','Công nghệ Kỹ thuật Xây dựng','Công nghệ Vật liệu','Công nghệ Cơ sở Hạ tầng','Sư phạm Công nghiệp');
            foreach($name as $key => $value){
            if($i<=3){
                DB::table('tbl_nganh')->insert([
                    'idkhoa' => 1,
                    'tennganh' => $value
                ]);
            }else
            if($i<=6){
                DB::table('tbl_nganh')->insert([
                    'idkhoa' => 2,
                    'tennganh' => $value
                ]);
            }else
            if($i<=9){
                DB::table('tbl_nganh')->insert([
                    'idkhoa' => 3,
                    'tennganh' => $value
                ]);
            }else
            if($i<=12){
                DB::table('tbl_nganh')->insert([
                    'idkhoa' => 4,
                    'tennganh' => $value
                ]);
            }else
            if($i<=13){
                DB::table('tbl_nganh')->insert([
                    'idkhoa' => 5,
                    'tennganh' => $value
                ]);
            }
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
        Schema::dropIfExists('tbl_nganh');
    }
}
