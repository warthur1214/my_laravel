<?php

namespace App\Http\Middleware;

use Closure;

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
//    	请求后执行
    	$response = $next($request);

    	if ($request->age <=200) {
    		return redirect('user/10');
	    }

        return $response;
//    	请求前执行
//    	return $next($request);
    }
}
