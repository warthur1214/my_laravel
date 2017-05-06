<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/12
 * Time: 18:18
 */

namespace App\Http\service;


use App\Http\model\AccountModel;

class AccountService
{
	public static function getAllAccount()
	{
		return AccountModel::all();
	}
}