<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

class XssSanitizer
{
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();
        array_walk_recursive($input, function(&$input) {
            // $input = strip_tags($input);
            $input = htmlspecialchars($input, ENT_QUOTES);
        });
        $request->merge($input);
        return $next($request);
    }
}