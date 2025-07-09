<?php

use App\Helpers\SettingsHelper;

if (!function_exists('setting')) {
    /**
     * Get a setting value by key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function setting(string $key, $default = null)
    {
        return SettingsHelper::get($key, $default);
    }
}

if (!function_exists('settings')) {
    /**
     * Get multiple settings by keys
     *
     * @param array $keys
     * @return array
     */
    function settings(array $keys): array
    {
        return SettingsHelper::getMultiple($keys);
    }
}

if (!function_exists('company_info')) {
    /**
     * Get company information
     *
     * @return array
     */
    function company_info(): array
    {
        return SettingsHelper::getCompanyInfo();
    }
}

if (!function_exists('hero_settings')) {
    /**
     * Get hero section settings
     *
     * @return array
     */
    function hero_settings(): array
    {
        return SettingsHelper::getHeroSettings();
    }
}

if (!function_exists('default_service_image')) {
    /**
     * Get default service image
     *
     * @return string
     */
    function default_service_image(): string
    {
        return SettingsHelper::getDefaultServiceImage();
    }
}

if (!function_exists('default_blog_image')) {
    /**
     * Get default blog image
     *
     * @return string
     */
    function default_blog_image(): string
    {
        return SettingsHelper::getDefaultBlogImage();
    }
}

if (!function_exists('is_feature_enabled')) {
    /**
     * Check if a feature is enabled
     *
     * @param string $feature
     * @return bool
     */
    function is_feature_enabled(string $feature): bool
    {
        return SettingsHelper::isFeatureEnabled($feature);
    }
}

if (!function_exists('numeric_setting')) {
    /**
     * Get numeric setting value
     *
     * @param string $key
     * @param int $default
     * @return int
     */
    function numeric_setting(string $key, int $default = 0): int
    {
        return SettingsHelper::getNumeric($key, $default);
    }
}

if (!function_exists('color_setting')) {
    /**
     * Get color setting value
     *
     * @param string $key
     * @param string $default
     * @return string
     */
    function color_setting(string $key, string $default = '#000000'): string
    {
        return SettingsHelper::getColor($key, $default);
    }
} 