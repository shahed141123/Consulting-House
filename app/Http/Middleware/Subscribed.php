<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// class Subscribed
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         return $next($request);
//     }
// }
class Subscribed {
    public function handle(Request $request, Closure $next): Response {
      if ($request->user() and ! $request->user()->subscribed('default'))
        return redirect('subscribe');
      return $next($request);
    }
  }
