<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblKhoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khoa', function (Blueprint $table) {
            $table->increments('idkhoa');
            $table->string('tenkhoa');
            $table->timestamps();

            
        });
        $name=array('Điện - Điện tử','Hóa học môi trường','Cơ khí','Xây dựng','Sư phạm công nghiệp');
            foreach($name as $key => $value)
            DB::table('tbl_khoa')->insert([
                'tenkhoa' => $value
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_khoa');
    }
}
