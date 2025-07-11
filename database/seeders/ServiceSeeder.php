<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            // خدمات مكافحة الحشرات
            [
                'name' => 'مكافحة الحشرات الزاحفة',
                'slug' => 'crawling-insects-control',
                'short_description' => 'مكافحة شاملة للصراصير والنمل والعناكب والحشرات الزاحفة الأخرى باستخدام أحدث المبيدات الآمنة.',
                'full_description' => 'خدمة متخصصة لمكافحة جميع أنواع الحشرات الزاحفة باستخدام مبيدات آمنة ومعتمدة. نوفر برامج وقائية مستمرة مع ضمان طويل المدى. فريقنا المدرب يستخدم أحدث التقنيات لضمان القضاء على الحشرات دون الإضرار بالبيئة أو صحة الأسرة.',
                'images' => [
                    'https://images.unsplash.com/photo-1527515862433-c2155119cd80?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1581888227599-779811939961?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات مكافحة الحشرات الزاحفة | بيور إير',
                'meta_description' => 'مكافحة فعالة للصراصير والنمل والعناكب. مبيدات آمنة وبرامج وقائية مع ضمان طويل المدى.',
                'meta_keywords' => 'مكافحة الصراصير، مكافحة النمل، مكافحة العناكب، مبيدات آمنة',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'مكافحة القوارض',
                'slug' => 'rodent-control',
                'short_description' => 'حلول متكاملة لمكافحة الفئران والجرذان مع تأمين المداخل ومنع الدخول المستقبلي.',
                'full_description' => 'برنامج متكامل لمكافحة القوارض يتضمن تحديد نقاط الدخول والقضاء على القوارض الموجودة وتأمين المداخل لمنع العودة. نستخدم طرق آمنة وفعالة مع متابعة دورية لضمان النتائج المستدامة.',
                'images' => [
                    'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات مكافحة القوارض والفئران | بيور إير',
                'meta_description' => 'حلول شاملة لمكافحة الفئران والجرذان مع تأمين المداخل ومتابعة دورية.',
                'meta_keywords' => 'مكافحة الفئران، مكافحة الجرذان، طرد القوارض، تأمين المداخل',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'مكافحة النمل الأبيض',
                'slug' => 'termite-control',
                'short_description' => 'معالجة متخصصة للنمل الأبيض وحماية المباني من الأضرار الهيكلية مع ضمان ممتد.',
                'full_description' => 'خدمة متخصصة لمكافحة النمل الأبيض تشمل الفحص الشامل للمبنى وتحديد مواقع الإصابة والمعالجة المتخصصة باستخدام أحدث المواد والتقنيات. نوفر ضمان ممتد مع فحوصات دورية للتأكد من عدم عودة الإصابة.',
                'images' => [
                    'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1509475826633-fed577a2c71b?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات مكافحة النمل الأبيض | بيور إير',
                'meta_description' => 'حماية شاملة من النمل الأبيض للمباني والأثاث مع ضمان ممتد وفحوصات دورية.',
                'meta_keywords' => 'مكافحة النمل الأبيض، حماية المباني، معالجة الخشب، فحص دوري',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'مكافحة البق والبراغيث',
                'slug' => 'bed-bugs-fleas-control',
                'short_description' => 'خدمات متخصصة للقضاء على بق الفراش والبراغيث مع معالجة شاملة للمفروشات والأقمشة.',
                'full_description' => 'معالجة متخصصة لبق الفراش والبراغيث تشمل تنظيف وتعقيم شامل للمراتب والمفروشات والسجاد. نستخدم طرق حرارية وكيميائية آمنة للقضاء على جميع مراحل نمو هذه الحشرات مع ضمان عدم العودة.',
                'images' => [
                    'https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات مكافحة البق والبراغيث | بيور إير',
                'meta_description' => 'علاج فعال لبق الفراش والبراغيث مع تعقيم شامل للمفروشات والأقمشة.',
                'meta_keywords' => 'مكافحة بق الفراش، مكافحة البراغيث، تعقيم المراتب، تنظيف المفروشات',
                'is_active' => true,
                'sort_order' => 4,
            ],
            
            // خدمات الخزانات
            [
                'name' => 'تنظيف وتعقيم الخزانات',
                'slug' => 'tank-cleaning-disinfection',
                'short_description' => 'تنظيف وتعقيم شامل لخزانات المياه العلوية والأرضية لضمان نقاء وجودة المياه.',
                'full_description' => 'خدمة تنظيف وتعقيم شاملة لخزانات المياه تشمل إفراغ الخزان وتنظيف الجدران والأرضية وإزالة الرواسب والطحالب والتعقيم بمواد آمنة ومعتمدة. نضمن مياه نظيفة وصحية لعائلتك مع شهادة جودة معتمدة.',
                'images' => [
                    'https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1582719508461-905c673771fd?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات تنظيف وتعقيم الخزانات | بيور إير',
                'meta_description' => 'تنظيف وتعقيم شامل لخزانات المياه مع إزالة الرواسب والطحالب وضمان جودة المياه.',
                'meta_keywords' => 'تنظيف الخزانات، تعقيم الخزانات، إزالة الرواسب، جودة المياه',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'عزل الخزانات',
                'slug' => 'tank-insulation',
                'short_description' => 'عزل حراري ومائي متخصص للخزانات لمنع التسربات والحفاظ على درجة حرارة المياه.',
                'full_description' => 'خدمة عزل متخصصة للخزانات العلوية والأرضية باستخدام أحدث مواد العزل الحراري والمائي. نضمن منع التسربات والحفاظ على درجة حرارة المياه المناسبة مع توفير الطاقة وحماية طويلة المدى.',
                'images' => [
                    'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1572120360610-d971b9d7767c?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات عزل الخزانات الحراري والمائي | بيور إير',
                'meta_description' => 'عزل متخصص للخزانات لمنع التسربات والحفاظ على درجة الحرارة مع توفير الطاقة.',
                'meta_keywords' => 'عزل الخزانات، عزل حراري، عزل مائي، منع التسربات',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'فحص وصيانة أنظمة التوزيع',
                'slug' => 'water-distribution-maintenance',
                'short_description' => 'فحص وصيانة شاملة لأنظمة توزيع المياه والمضخات وأنابيب التوصيل.',
                'full_description' => 'خدمة فحص وصيانة شاملة لأنظمة توزيع المياه تشمل فحص المضخات والأنابيب والصمامات وأجهزة التحكم. نضمن تدفق مياه مستقر وضغط مناسب مع الحفاظ على كفاءة النظام وإطالة عمره الافتراضي.',
                'images' => [
                    'https://images.unsplash.com/photo-1516414447565-b14be0adf13e?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1558618644-fcd25c85cd64?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات صيانة أنظمة توزيع المياه | بيور إير',
                'meta_description' => 'فحص وصيانة شاملة للمضخات والأنابيب وأنظمة التوزيع لضمان تدفق مياه مستقر.',
                'meta_keywords' => 'صيانة المضخات، فحص الأنابيب، أنظمة التوزيع، صيانة الخزانات',
                'is_active' => true,
                'sort_order' => 7,
            ],
            
            // خدمات المكيفات
            [
                'name' => 'تنظيف وصيانة المكيفات المنزلية',
                'slug' => 'home-ac-cleaning-maintenance',
                'short_description' => 'تنظيف وصيانة شاملة للمكيفات المنزلية تشمل الفلاتر والمبخرات والوحدات الخارجية.',
                'full_description' => 'خدمة شاملة لتنظيف وصيانة المكيفات المنزلية تشمل تنظيف الفلاتر والمبخرات والمكثفات والوحدات الخارجية. نضمن أداء مثالي وهواء نظيف مع توفير في استهلاك الطاقة وإطالة عمر المكيف.',
                'images' => [
                    'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1592928302636-c83cf1e5aca6?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات تنظيف وصيانة المكيفات المنزلية | بيور إير',
                'meta_description' => 'تنظيف وصيانة شاملة للمكيفات المنزلية لضمان أداء مثالي وهواء نظيف مع توفير الطاقة.',
                'meta_keywords' => 'تنظيف المكيفات، صيانة المكيفات، تنظيف الفلاتر، صيانة دورية',
                'is_active' => true,
                'sort_order' => 8,
            ],
            [
                'name' => 'صيانة أنظمة التكييف المركزي',
                'slug' => 'central-ac-maintenance',
                'short_description' => 'صيانة متخصصة لأنظمة التكييف المركزي في المباني التجارية والسكنية الكبيرة.',
                'full_description' => 'خدمة صيانة متخصصة لأنظمة التكييف المركزي تشمل فحص وصيانة جميع المكونات والتحكم في الأداء وتحسين الكفاءة. نقدم خدمات صيانة دورية ووقائية لضمان تشغيل مستمر وموثوق.',
                'images' => [
                    'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات صيانة أنظمة التكييف المركزي | بيور إير',
                'meta_description' => 'صيانة متخصصة لأنظمة التكييف المركزي مع فحص شامل وصيانة وقائية.',
                'meta_keywords' => 'التكييف المركزي، صيانة وقائية، أنظمة التبريد، كفاءة الطاقة',
                'is_active' => true,
                'sort_order' => 9,
            ],
            [
                'name' => 'إعادة تعبئة الفريون وإصلاح التسربات',
                'slug' => 'freon-refill-leak-repair',
                'short_description' => 'خدمة إعادة تعبئة الفريون وإصلاح تسربات الغاز مع ضمان على الأعمال.',
                'full_description' => 'خدمة متخصصة لإعادة تعبئة الفريون وإصلاح تسربات غاز التبريد. نستخدم أحدث المعدات لاكتشاف التسربات وإصلاحها مع إعادة تعبئة الغاز بالكمية المناسبة لضمان أداء مثالي للمكيف.',
                'images' => [
                    'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop'
                ],
                'meta_title' => 'خدمات إعادة تعبئة الفريون وإصلاح التسربات | بيور إير',
                'meta_description' => 'إعادة تعبئة الفريون وإصلاح تسربات الغاز مع ضمان على الأعمال وقطع الغيار.',
                'meta_keywords' => 'إعادة تعبئة الفريون، إصلاح التسربات، غاز التبريد، صيانة المكيفات',
                'is_active' => true,
                'sort_order' => 10,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
