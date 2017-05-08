<?php

namespace App\Http\Controllers;

use App\Http\Service\AccountService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function __construct()
    {
//    	$this->middleware('checkage')->only('test')->except('login');
//	    $this->middleware(function ($request, $next) {
//
//	    	return $next($request);
//	    });
    }

    public function test(Request $request)
    {
        dump($request->a);
        return response()->json(['name' => '中文'], 200, [], 256);
    }

    public function getJson(Request $request)
    {
        dump($request->input("user.name"));
        return response('json', 200)->header('Content-Type', 'text/plain');
    }

    public function getAllAccount()
    {
        AccountService::getInfo();
    }

    public function getInfo()
    {
//        abort(404);
        AccountService::getInfo();
    }
    public function getList()
    {
        AccountService::getList();
    }

    public function collect()
    {
        $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
            return strtoupper($name);
        })
            ->reject(function ($name) {
                return empty($name);
            });
        dump($collection);

        $collection = collect([1, 2, 3])->all();
        dump($collection);

        $collection = collect([1, 2, 3, 4])->avg();
        dump($collection);


    }
}
