<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // إعدادات الموقع الأساسية
            ['key' => 'site_title', 'value' => 'بيور إير - خدمات مكافحة الحشرات وصيانة الخزانات والمكيفات', 'type' => 'text'],
            ['key' => 'site_description', 'value' => 'بيور إير تقدم خدمات احترافية لمكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات للمنازل والمؤسسات مع أحدث التقنيات والمعدات.', 'type' => 'text'],
            ['key' => 'site_description_ar', 'value' => 'خدمات احترافية لمكافحة الحشرات وصيانة الخزانات والمكيفات مع ضمان الجودة والسلامة.', 'type' => 'text'],
            ['key' => 'site_keywords', 'value' => 'مكافحة الحشرات، عزل الخزانات، تعقيم الخزانات، صيانة المكيفات، تنظيف المكيفات، بيور إير، الرياض، السعودية', 'type' => 'text'],
            
            // معلومات الاتصال
            ['key' => 'contact_phone', 'value' => '+966-50-123-4567', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'info@pureair.sa', 'type' => 'email'],
            ['key' => 'contact_address', 'value' => 'شارع الملك فهد، الرياض، المملكة العربية السعودية', 'type' => 'text'],
            ['key' => 'contact_address_ar', 'value' => 'الرياض، المملكة العربية السعودية', 'type' => 'text'],
            ['key' => 'whatsapp_number', 'value' => '966501234567', 'type' => 'text'],
            ['key' => 'instagram_handle', 'value' => 'pure_air2612', 'type' => 'text'],
            ['key' => 'emergency_phone', 'value' => '+966-50-999-8888', 'type' => 'text'],
            
            // ساعات العمل والخدمة
            ['key' => 'company_hours', 'value' => 'الأحد - الخميس: 8:00 صباحاً - 6:00 مساءً\nالجمعة: 9:00 صباحاً - 4:00 مساءً\nالسبت: مغلق', 'type' => 'textarea'],
            ['key' => 'service_areas', 'value' => 'الرياض، جدة، الدمام، مكة المكرمة، المدينة المنورة، تبوك، أبها، الخبر', 'type' => 'text'],
            ['key' => 'working_days', 'value' => 'نعمل 7 أيام في الأسبوع مع خدمة الطوارئ 24 ساعة', 'type' => 'text'],
            
            // إعدادات المحتوى الرئيسي
            ['key' => 'hero_title', 'value' => 'حماية شاملة لمنزلك ومؤسستك', 'type' => 'text'],
            ['key' => 'hero_subtitle', 'value' => 'خدمات متخصصة في مكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات. حماية موثوقة وبيئة صحية نظيفة.', 'type' => 'text'],
            ['key' => 'about_company', 'value' => 'بيور إير شركة رائدة في مجال الخدمات المنزلية والمؤسسية، نقدم حلولاً متكاملة لمكافحة الحشرات وصيانة الخزانات والمكيفات مع أحدث التقنيات والمعدات المتطورة.', 'type' => 'textarea'],
            ['key' => 'company_mission', 'value' => 'مهمتنا توفير بيئة صحية آمنة للعائلات والمؤسسات من خلال خدمات احترافية عالية الجودة في مكافحة الحشرات وصيانة الخزانات والمكيفات.', 'type' => 'textarea'],
            ['key' => 'company_vision', 'value' => 'رؤيتنا أن نكون الخيار الأول في المملكة العربية السعودية لخدمات حماية وصيانة المنازل والمؤسسات.', 'type' => 'textarea'],
            
            // إعدادات الصور والعرض
            ['key' => 'default_service_image', 'value' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop', 'type' => 'url'],
            ['key' => 'default_blog_image', 'value' => 'https://images.unsplash.com/photo-1516414447565-b14be0adf13e?w=800&h=600&fit=crop', 'type' => 'url'],
            ['key' => 'image_quality', 'value' => '80', 'type' => 'number'],
            ['key' => 'max_images_per_service', 'value' => '5', 'type' => 'number'],
            ['key' => 'enable_image_lazy_loading', 'value' => 'true', 'type' => 'boolean'],
            ['key' => 'image_alt_prefix', 'value' => 'بيور إير -', 'type' => 'text'],
            
            // إعدادات الخدمات
            ['key' => 'services_per_page', 'value' => '9', 'type' => 'number'],
            ['key' => 'featured_services_count', 'value' => '3', 'type' => 'number'],
            ['key' => 'enable_service_carousel', 'value' => 'true', 'type' => 'boolean'],
            ['key' => 'service_image_aspect_ratio', 'value' => '4:3', 'type' => 'text'],
            
            // إعدادات المدونة
            ['key' => 'posts_per_page', 'value' => '6', 'type' => 'number'],
            ['key' => 'latest_posts_count', 'value' => '3', 'type' => 'number'],
            ['key' => 'enable_featured_images', 'value' => 'true', 'type' => 'boolean'],
            ['key' => 'blog_excerpt_length', 'value' => '150', 'type' => 'number'],
            
            // إعدادات SEO وأداء
            ['key' => 'google_analytics_id', 'value' => '', 'type' => 'text'],
            ['key' => 'meta_robots', 'value' => 'index, follow', 'type' => 'text'],
            ['key' => 'enable_sitemap', 'value' => 'true', 'type' => 'boolean'],
            ['key' => 'cache_duration', 'value' => '3600', 'type' => 'number'],
            
            // إحصائيات الشركة
            ['key' => 'years_experience', 'value' => '10', 'type' => 'number'],
            ['key' => 'satisfied_customers', 'value' => '1000', 'type' => 'number'],
            ['key' => 'completed_projects', 'value' => '2500', 'type' => 'number'],
            ['key' => 'certified_technicians', 'value' => '15', 'type' => 'number'],
            
            // شهادات ومعتمدات
            ['key' => 'certifications', 'value' => 'معتمد من وزارة الصحة، شهادة ISO 9001، عضوية الغرفة التجارية، ترخيص البلدية', 'type' => 'textarea'],
            ['key' => 'warranty_period', 'value' => '6 أشهر', 'type' => 'text'],
            ['key' => 'response_time', 'value' => '24 ساعة', 'type' => 'text'],
            
            // إعدادات الألوان والعلامة التجارية
            ['key' => 'primary_color', 'value' => '#28a745', 'type' => 'color'],
            ['key' => 'secondary_color', 'value' => '#1e7e34', 'type' => 'color'],
            ['key' => 'accent_color', 'value' => '#c3e6cb', 'type' => 'color'],
            ['key' => 'brand_logo_url', 'value' => '/images/logo.png', 'type' => 'url'],
            ['key' => 'brand_favicon', 'value' => '/images/favicon.ico', 'type' => 'url'],
            
            // رسائل النظام
            ['key' => 'maintenance_message', 'value' => 'الموقع تحت الصيانة مؤقتاً. سنعود قريباً بخدمات أفضل.', 'type' => 'textarea'],
            ['key' => 'contact_success_message', 'value' => 'شكراً لتواصلك معنا. سنقوم بالرد عليك في أقرب وقت ممكن.', 'type' => 'textarea'],
            ['key' => 'quote_success_message', 'value' => 'تم استلام طلب العرض بنجاح. سنتواصل معك خلال 24 ساعة.', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
