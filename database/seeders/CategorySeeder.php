<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'مكافحة الحشرات', 'slug' => 'pest-control'],
            ['name' => 'عزل وتعقيم الخزانات', 'slug' => 'tank-maintenance'],
            ['name' => 'صيانة المكيفات', 'slug' => 'ac-maintenance'],
            ['name' => 'نصائح الوقاية', 'slug' => 'prevention-tips'],
            ['name' => 'الصحة والسلامة', 'slug' => 'health-safety'],
            ['name' => 'أخبار الشركة', 'slug' => 'company-news'],
            ['name' => 'دليل الصيانة', 'slug' => 'maintenance-guide'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
