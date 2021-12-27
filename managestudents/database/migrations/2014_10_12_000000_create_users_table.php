<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idrole');
            $table->string('name');
            $table->string('idsv');
            $table->string('password');
            $table->string('lop')->nullable();
            $table->string('nganh')->nullable();
            $table->string('khoa')->nullable();
            $table->string('ngaysinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('tongiao')->nullable();
            $table->string('dantoc')->nullable();
            $table->string('cmnd')->nullable();
            $table->string('ngaycap')->nullable();
            $table->string('noicap')->nullable();
            $table->string('noisinh')->nullable();
            $table->string('email')->nullable();
            $table->string('dienthoai')->nullable();
            $table->string('hokhau')->nullable();
            $table->string('ladiachicua')->nullable();
            $table->string('tinh')->nullable();
            $table->string('huyen')->nullable();
            $table->string('xa')->nullable();
            $table->string('sobaohiem')->nullable();
            $table->string('hieuluc')->nullable();
            $table->string('nganhang')->nullable();
            $table->string('stk')->nullable();
            $table->string('khuvuc')->nullable();
            $table->string('doituong')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        $faker = Faker\Factory::create();
        $limit=70;
        for($i=1;$i<=$limit;$i++){
            
                DB::table('tbl_user')->insert([
                    'idsv' =>'1911505310100'+$i,
                    'idrole' =>2,
                    'name' => ($faker->randomElement($aray=array('Nguyễn','Đặng','Phan','Vũ','Trần','Lê','Phạm','Hoàng'))).' '.($faker->randomElement($aray=array('Văn','Hoàng','Thị','Anh','Trung','Thùy'))).' '.($faker->randomElement($aray=array('Anh','Vy','Ngọc','Quân','Long','Phúc','Huy','Minh','Bảo','Ngân','Khang','Như','Nhi','Hân','Thư','Linh'))),
                    'password' =>'12345',
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
        Schema::dropIfExists('tbl_user');
    }
}
