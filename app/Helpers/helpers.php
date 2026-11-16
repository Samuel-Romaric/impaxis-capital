<?php

// if (!function_exists('active')) {
    /**
     * Determine if the given route is active.
     *
     * @param  string $routes
     * @return string
     */
    function active(string ...$routes): string
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active'; 
                // return request()->routeIs('front.contact') ? 'activeContactBtn' : 'active';
            }
        }

        return '';
    }
// }
