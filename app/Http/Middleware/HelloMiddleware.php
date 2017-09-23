<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = [
            ['name'=>'kakefu','mail' => 'kakefu@gmail.com'],
            ['name'=>'bas','mail' => 'bas@gmail.com'],
            ['name'=>'okada','mail' => 'okada@gmail.com']
        ];

        $request->merge(['data' => $data]);

        return $next($request);
    }


}
