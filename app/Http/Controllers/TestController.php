<?php

namespace App\Http\Controllers;

use App\Http\service\AccountService;
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

	public function test(Request $request) {
		dump($request->a);
		return response()->json(['name'=>'111']);
	}

	public function getJson(Request $request) {
		dump($request->input("user.name"));
		return response('json', 200)->header('Content-Type', 'text/plain');
	}

	public function getAllAccount() {
		AccountService::getAllAccount();
	}
}
