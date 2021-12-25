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
            $table->id();
            $table->string('name');
            $table->string('idsv');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $faker = Faker\Factory::create();
        $limit=70;
        for($i=1;$i<=$limit;$i++){
            
                DB::table('tbl_user')->insert([
                    'idsv' =>'1911505310100'+$i,
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
        Schema::dropIfExists('users');
    }
}
