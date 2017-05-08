<?php
/**
 * Created by PhpStorm.
 * User: warthur
 * Date: 17/5/7
 * Time: 下午1:10
 */

namespace App\Http\Dao;


use Illuminate\Support\Facades\DB;

class AccountDao
{
    private static $table="db_crop.tp_account";

    public static function getList()
    {
        return DB::table(self::$table)->get();
    }

    public static function getInfo()
    {
        return DB::table(self::$table)->where('organ_id', 72)
            ->orderBy('create_time', 'desc')
            ->take(3)->get();
    }
}