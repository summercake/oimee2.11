<?php
use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);
        $table_names = [
            'users',
            'password_resets',
            'advertisements',
            'companies',
            'contact_persons',
            'collections',
            'categories',
            'tags',
            'posts',
            'replies',
            'images',
            'permissions',
            'permission_roles',
            'roles',
        ];
        // 生成数据集合
        $permissions = factory(Permission::class)
            -> times(14)
            -> make()
            -> each(function ($permission, $index)
            use ($faker, $table_names){
                $permission -> key = $index;
                $permission -> table_name = $faker -> randomElement($table_names);
            });
        // 让隐藏字段可见，并将数据集合转换为数组
        $permissions_array = $permissions->toArray();

        // 插入到数据库中
        Permission::insert($permissions_array);
    }
}
