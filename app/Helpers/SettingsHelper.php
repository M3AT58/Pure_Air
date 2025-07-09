<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingsHelper
{
    /**
     * Get a setting value by key
     */
    public static function get(string $key, $default = null)
    {
        return Cache::remember("setting.{$key}", 3600, function () use ($key, $default) {
            $setting = Setting::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Get multiple settings by keys
     */
    public static function getMultiple(array $keys): array
    {
        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = self::get($key);
        }
        return $settings;
    }

    /**
     * Set a setting value
     */
    public static function set(string $key, $value, string $type = 'text'): bool
    {
        try {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'type' => $type]
            );
            
            // Clear cache
            Cache::forget("setting.{$key}");
            
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get all settings as key-value pairs
     */
    public static function all(): array
    {
        return Cache::remember('settings.all', 3600, function () {
            return Setting::pluck('value', 'key')->toArray();
        });
    }

    /**
     * Clear all settings cache
     */
    public static function clearCache(): void
    {
        $keys = Setting::pluck('key');
        foreach ($keys as $key) {
            Cache::forget("setting.{$key}");
        }
        Cache::forget('settings.all');
    }

    /**
     * Get image-related settings
     */
    public static function getImageSettings(): array
    {
        return self::getMultiple([
            'default_service_image',
            'default_blog_image',
            'image_quality',
            'max_images_per_service',
            'enable_image_lazy_loading',
            'image_alt_prefix',
            'service_image_aspect_ratio'
        ]);
    }

    /**
     * Get company information
     */
    public static function getCompanyInfo(): array
    {
        return self::getMultiple([
            'site_title',
            'site_description',
            'contact_phone',
            'contact_email',
            'contact_address',
            'whatsapp_number',
            'instagram_handle',
            'years_experience',
            'satisfied_customers',
            'completed_projects',
            'certified_technicians'
        ]);
    }

    /**
     * Get hero section settings
     */
    public static function getHeroSettings(): array
    {
        return self::getMultiple([
            'hero_title',
            'hero_subtitle'
        ]);
    }

    /**
     * Get SEO settings
     */
    public static function getSeoSettings(): array
    {
        return self::getMultiple([
            'site_title',
            'site_description',
            'site_keywords',
            'meta_robots',
            'google_analytics_id'
        ]);
    }

    /**
     * Get default image for service if no images available
     */
    public static function getDefaultServiceImage(): string
    {
        return self::get('default_service_image', 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800&h=600&fit=crop');
    }

    /**
     * Get default image for blog post if no featured image
     */
    public static function getDefaultBlogImage(): string
    {
        return self::get('default_blog_image', 'https://images.unsplash.com/photo-1516414447565-b14be0adf13e?w=800&h=600&fit=crop');
    }

    /**
     * Check if feature is enabled
     */
    public static function isFeatureEnabled(string $feature): bool
    {
        $value = self::get($feature, 'false');
        return in_array(strtolower($value), ['true', '1', 'yes', 'on'], true);
    }

    /**
     * Get numeric setting
     */
    public static function getNumeric(string $key, int $default = 0): int
    {
        return (int) self::get($key, $default);
    }

    /**
     * Get color setting
     */
    public static function getColor(string $key, string $default = '#000000'): string
    {
        $color = self::get($key, $default);
        return str_starts_with($color, '#') ? $color : "#$color";
    }
} 