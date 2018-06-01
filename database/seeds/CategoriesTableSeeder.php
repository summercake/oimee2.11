<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon ::now() -> toDateTimeString();
        $categories = array(
            [
                'parent_id'     => null,
                'category_name' => 'root',
                'category_slug' => 'root',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 1,
                'category_name' => '电器',
                'category_slug' => '电器',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 1,
                'category_name' => '保健品',
                'category_slug' => '保健品',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 1,
                'category_name' => '体育用品',
                'category_slug' => '体育用品',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 1,
                'category_name' => '汽车',
                'category_slug' => '汽车',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 1,
                'category_name' => '金融产品',
                'category_slug' => '金融产品',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 1,
                'category_name' => '旅游',
                'category_slug' => '旅游',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 6,
                'category_name' => '信用卡',
                'category_slug' => '信用卡',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 3,
                'category_name' => '鱼油',
                'category_slug' => '鱼油',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 2,
                'category_name' => 'Dell',
                'category_slug' => 'Dell',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 7,
                'category_name' => '日本旅游',
                'category_slug' => '日本旅游',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'parent_id'     => 8,
                'category_name' => 'Chase Credit Card',
                'category_slug' => 'Chase Credit Card',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        );
        Category ::insert($categories);
    }
}
