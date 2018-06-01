<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class,10)->create();
        //// 获取 Faker 实例
        //$faker = app(Faker\Generator::class);
        //// 生成数据集合
        //$roles = factory(Role::class)
        //    -> times(14)
        //    -> make()
        //    -> each(function ($role, $index)
        //    use ($faker){
        //        $role -> key = $index;
        //        $role -> table_name = $faker -> randomElement($table_names);
        //    });
        //$roles -> save();
        ///*// 让隐藏字段可见，并将数据集合转换为数组
        //$role_array = $roles->toArray();
        //
        //// 插入到数据库中
        //Role::insert($role_array);*/
    }
}
