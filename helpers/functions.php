<?php

if (!function_exists('ensueConfig')) {

    function ensueConfig($request = '')
    {
        $request = !empty($request) ? 'vendor.ensue.'. trim($request) : 'vendor.ensue';
        return config($request);
    }
}
