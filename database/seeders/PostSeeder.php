<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        
        $posts = [
            [
                'title' => 'كيفية منع الحشرات من دخول منزلك',
                'slug' => 'prevent-insects-home-entry',
                'excerpt' => 'نصائح فعالة لحماية منزلك من الحشرات الزاحفة والطائرة وطرق الوقاية الطبيعية الآمنة.',
                'body' => 'حماية المنزل من الحشرات أمر ضروري للحفاظ على بيئة صحية ونظيفة. في هذا المقال، سنستكشف أهم الطرق الوقائية لمنع دخول الحشرات إلى منزلك، بما في ذلك إغلاق الشقوق والفتحات، الحفاظ على النظافة، واستخدام الطرق الطبيعية الآمنة. سنقدم أيضاً نصائح للتعامل مع المناطق الأكثر عرضة لدخول الحشرات مثل المطبخ والحمام.',
                'featured_image' => 'https://images.unsplash.com/photo-1527515862433-c2155119cd80?w=800&h=600&fit=crop',
                'meta_title' => 'طرق منع الحشرات من دخول المنزل | بيور إير',
                'meta_description' => 'تعرف على أفضل الطرق لحماية منزلك من الحشرات مع نصائح الوقاية الفعالة والآمنة من خبراء بيور إير.',
                'meta_keywords' => 'منع الحشرات، حماية المنزل، طرق الوقاية، مكافحة طبيعية',
                'category_id' => Category::where('slug', 'pest-control')->first()->id,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(3),
                'created_at' => Carbon::now()->subDays(3),
            ],
            [
                'title' => 'أهمية تنظيف خزانات المياه بانتظام',
                'slug' => 'importance-regular-tank-cleaning',
                'excerpt' => 'لماذا يجب تنظيف خزانات المياه دورياً وكيف يؤثر ذلك على صحة الأسرة وجودة المياه.',
                'body' => 'تنظيف خزانات المياه بانتظام أمر بالغ الأهمية لضمان حصولك على مياه نظيفة وصحية. مع مرور الوقت، تتراكم الرواسب والطحالب والبكتيريا في الخزانات، مما قد يؤثر على طعم ولون ورائحة المياه، وأهم من ذلك على صحة الأسرة. في هذا المقال، سنتعرف على أهمية التنظيف الدوري، المؤشرات التي تدل على ضرورة التنظيف، والفوائد الصحية للمياه النظيفة.',
                'featured_image' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=800&h=600&fit=crop',
                'meta_title' => 'أهمية تنظيف خزانات المياه | بيور إير',
                'meta_description' => 'تعرف على أهمية تنظيف خزانات المياه بانتظام وتأثيره على صحة الأسرة. نصائح من خبراء بيور إير.',
                'meta_keywords' => 'تنظيف خزانات المياه، جودة المياه، صحة الأسرة، تعقيم الخزانات',
                'category_id' => Category::where('slug', 'tank-maintenance')->first()->id,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(7),
                'created_at' => Carbon::now()->subDays(7),
            ],
            [
                'title' => 'علامات تدل على حاجة مكيفك للصيانة',
                'slug' => 'ac-maintenance-warning-signs',
                'excerpt' => 'تعرف على العلامات التحذيرية التي تشير إلى ضرورة صيانة المكيف للحفاظ على أدائه وكفاءته.',
                'body' => 'معرفة علامات احتياج المكيف للصيانة يمكن أن توفر عليك الكثير من المال وتضمن بيئة مريحة في منزلك. هناك عدة علامات تحذيرية يجب الانتباه إليها مثل ضعف التبريد، الأصوات الغريبة، ارتفاع فاتورة الكهرباء، والروائح الكريهة. في هذا المقال، سنستكشف هذه العلامات بالتفصيل ونقدم نصائح للصيانة الوقائية التي تحافظ على مكيفك يعمل بكفاءة عالية.',
                'featured_image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop',
                'meta_title' => 'علامات احتياج المكيف للصيانة | بيور إير',
                'meta_description' => 'تعرف على العلامات التي تدل على حاجة مكيفك للصيانة وكيفية الحفاظ على أدائه الأمثل.',
                'meta_keywords' => 'صيانة المكيفات، علامات تحذيرية، أعطال المكيفات، صيانة وقائية',
                'category_id' => Category::where('slug', 'ac-maintenance')->first()->id,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(12),
                'created_at' => Carbon::now()->subDays(12),
            ],
            [
                'title' => 'مكافحة النمل الأبيض: الوقاية والعلاج',
                'slug' => 'termite-prevention-treatment',
                'excerpt' => 'دليل شامل للوقاية من النمل الأبيض وطرق العلاج الفعالة لحماية منزلك من الأضرار.',
                'body' => 'النمل الأبيض من أخطر الآفات التي تهدد المباني والأثاث الخشبي. في هذا المقال الشامل، سنتعرف على أنواع النمل الأبيض، علامات الإصابة المبكرة، طرق الوقاية الفعالة، وأحدث طرق العلاج المتاحة. سنقدم أيضاً نصائح للحفاظ على منزلك محمياً من هذه الآفة المدمرة وأهمية الفحص الدوري المهني.',
                'featured_image' => 'https://images.unsplash.com/photo-1509475826633-fed577a2c71b?w=800&h=600&fit=crop',
                'meta_title' => 'مكافحة النمل الأبيض: دليل شامل | بيور إير',
                'meta_description' => 'دليل شامل لمكافحة النمل الأبيض والوقاية منه. نصائح من خبراء بيور إير لحماية منزلك.',
                'meta_keywords' => 'مكافحة النمل الأبيض، حماية المباني، وقاية من الآفات، معالجة الخشب',
                'category_id' => Category::where('slug', 'pest-control')->first()->id,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(18),
                'created_at' => Carbon::now()->subDays(18),
            ],
            [
                'title' => 'فوائد عزل الخزانات وأنواع العزل المختلفة',
                'slug' => 'tank-insulation-benefits-types',
                'excerpt' => 'تعرف على أهمية عزل خزانات المياه والأنواع المختلفة للعزل وفوائدها في توفير الطاقة.',
                'body' => 'عزل خزانات المياه استثمار ذكي يحقق فوائد متعددة من توفير الطاقة إلى حماية جودة المياه. في هذا المقال، سنستكشف أنواع العزل المختلفة بما في ذلك العزل الحراري والمائي، المواد المستخدمة، وكيفية اختيار النوع المناسب لخزانك. سنناقش أيضاً الفوائد الاقتصادية والبيئية للعزل الجيد وعلامات احتياج الخزان للعزل.',
                'featured_image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop',
                'meta_title' => 'فوائد عزل الخزانات وأنواعه | بيور إير',
                'meta_description' => 'اكتشف فوائد عزل خزانات المياه وأنواع العزل المختلفة لتوفير الطاقة وحماية المياه.',
                'meta_keywords' => 'عزل الخزانات، توفير الطاقة، العزل الحراري، حماية المياه',
                'category_id' => Category::where('slug', 'tank-maintenance')->first()->id,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(25),
                'created_at' => Carbon::now()->subDays(25),
            ],
            [
                'title' => 'نصائح توفير الطاقة مع صيانة المكيفات',
                'slug' => 'energy-saving-ac-maintenance',
                'excerpt' => 'كيف تقلل من استهلاك الكهرباء وتحافظ على كفاءة التبريد من خلال الصيانة الصحيحة.',
                'body' => 'الصيانة الصحيحة للمكيفات لا تضمن الأداء الأمثل فحسب، بل تساعد أيضاً في توفير الطاقة بشكل كبير. في هذا المقال، سنقدم نصائح عملية لتقليل استهلاك الكهرباء مثل تنظيف الفلاتر بانتظام، ضبط درجة الحرارة المناسبة، وأهمية العزل الجيد. سنتناول أيضاً أحدث التقنيات في مجال كفاءة الطاقة ونصائح الاستخدام الأمثل للمكيفات.',
                'featured_image' => 'https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?w=800&h=600&fit=crop',
                'meta_title' => 'توفير الطاقة مع صيانة المكيفات | بيور إير',
                'meta_description' => 'نصائح فعالة لتوفير الطاقة والكهرباء من خلال الصيانة الصحيحة للمكيفات.',
                'meta_keywords' => 'توفير الطاقة، كفاءة المكيفات، تقليل استهلاك الكهرباء، صيانة ذكية',
                'category_id' => Category::where('slug', 'ac-maintenance')->first()->id,
                'user_id' => $user->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(30),
                'created_at' => Carbon::now()->subDays(30),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
} 