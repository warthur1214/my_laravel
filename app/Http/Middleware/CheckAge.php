<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class CheckAge
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
        // 请求前执行
        Log::info(1111111111111111111);
        $response = $next($request);
        Log::info(2222222222222222222);
        // 请求后执行
        if ($request->age <=200) {
            return redirect('user/10');
        }

        return $response;
    }
}
