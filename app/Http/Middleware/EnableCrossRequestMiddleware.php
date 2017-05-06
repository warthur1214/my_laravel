<?php
/**
 * Created by PhpStorm.
 * User: warthur
 * Date: 17/5/6
 * Time: 下午1:13
 */

namespace App\Http\Middleware;


use Closure;

class EnableCrossRequestMiddleware
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

        $response = $next($request);
        $response->header('Access-Control-Allow-Origin', config('app.allow'));
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept, X-Auth-Token');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
//        $response->header('Access-Control-Allow-Credentials', 'true');
        return $response;
    }
}