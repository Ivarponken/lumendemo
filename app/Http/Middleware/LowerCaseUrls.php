<?php

namespace App\Http\Middleware;

class LowerCaseUrls
{
    public function handle($request, \Closure $next)
    {
        $path = $request->path();

        if ($path !== strtolower($path)) {

            return redirect(strtolower($request->getRequestUri()));
        }
        return $next($request);
    }
}
