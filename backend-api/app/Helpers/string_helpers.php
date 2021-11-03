<?php
/*
 * Copyright (c) 2021. Debugger Tech
 * All Rights Reserved.
 */

if (!function_exists('appDomain')) {
    /**
     * @param string|null $for
     *
     * @return string|null
     */
    function appDomain(string $for = null) : ?string
    {
        $for = !$for ? 'app.url' : "app.{$for}_url";
        $url = config($for);

        if (!$url || (!Str::startsWith($url, 'https://') && !Str::startsWith($url, 'http://'))) {
            return null;
        }

        return Str::startsWith($url, 'https://')
            ? Str::after($url, 'https://')
            : Str::after($url, 'http://');
    }
}

