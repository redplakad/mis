<?php

if (!function_exists('breadcrumb')) {
    function breadcrumb($url)
    {
        $path = parse_url($url, PHP_URL_PATH);
        $segments = explode('/', $path);

        $breadcrumb = '<ol class="breadcrumb text-muted fs-6 fw-semibold">';
        $breadcrumb .= '<li class="breadcrumb-item"><a href="' . url('/') . '" class="text-success">Dashboard</a></li>';

        $url = '';
        foreach ($segments as $segment) {
            if (!empty($segment)) {
                $url .= '/' . $segment;
                if (end($segments) == $segment) {
                    $breadcrumb .= '<li class="breadcrumb-item text-muted">' . ucfirst($segment) . '</li>';
                } else {
                    $breadcrumb .= '<li class="breadcrumb-item"><a href="' . url($url) . '" class="text-success">' . ucfirst($segment) . '</a></li>';
                }
            }
        }

        $breadcrumb .= '</ol>';

        return $breadcrumb;
    }
}
