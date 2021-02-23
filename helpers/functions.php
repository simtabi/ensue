<?php

if (!function_exists('overridesConfig')) {

    function overridesConfig($request = '')
    {
        $request = !empty($request) ? 'truss.overrides.'. trim($request) : 'truss.overrides';
        return config($request);
    }
}
