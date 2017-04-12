<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/10
 * Time: 16:03
 */

namespace App\Http\model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AccountModel extends Model
{
	protected static $table = "tp_account";
	public static $timestamps = false;

	public static function getList()
	{
		return DB::table(self::table)->get();
	}

}