<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
            
            if (!$request->expectsJson()) {
                if ($request->routeIs('admin.*') && !$request->user('admin')) {
                    return route('admin.login'); // Return the route name as a string
                }
                if ($request->routeIs('vendor.*') && !$request->user('vendor')) {
                    return route('vendor.login'); // Return the route name as a string
                }
                if ($request->routeIs('user.*') && !$request->user('web')) {
                    return route('login'); // Return the route name as a string
                }
            }

            return null; // Return null when the request expects JSON (optional)

    }
}
